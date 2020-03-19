/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 */

import { Toolbar } from '@ephox/bridge';
import { Node as DomNode } from '@ephox/dom-globals';
import { Option, Arr } from '@ephox/katamari';
import { Compare, Element, TransformFind } from '@ephox/sugar';
import Editor from 'tinymce/core/api/Editor';

import { ScopedToolbars } from './ContextToolbarScopes';

export type LookupResult = { toolbarApi: Toolbar.ContextToolbar | Toolbar.ContextForm, elem: Element };

const matchTargetWith = (elem: Element, toolbars: Array<Toolbar.ContextToolbar | Toolbar.ContextForm>): Option<LookupResult> => {
  return Arr.findMap(toolbars, (toolbarApi) =>
    toolbarApi.predicate(elem.dom()) ? Option.some({ toolbarApi, elem }) : Option.none());
};

const lookup = (scopes: ScopedToolbars, editor: Editor): Option<LookupResult> => {
  const rootElem = Element.fromDom(editor.getBody());
  const isRoot = (elem: Element<DomNode>) => Compare.eq(elem, rootElem);

  const startNode = Element.fromDom(editor.selection.getNode());

  // Ensure the lookup doesn't start on a parent element of the root node
  if (Compare.contains(startNode, rootElem)) {
    return Option.none();
  }

  return matchTargetWith(startNode, scopes.inNodeScope).orThunk(() => {
    return matchTargetWith(startNode, scopes.inEditorScope).orThunk(() => {
      return TransformFind.ancestor(startNode, (elem) => {
        // TransformFind will try to transform before doing the isRoot check, so we need to check here as well
        return isRoot(elem) ? Option.none() : matchTargetWith(elem, scopes.inNodeScope);
      }, isRoot);
    });
  });
};

export default {
  lookup
};
