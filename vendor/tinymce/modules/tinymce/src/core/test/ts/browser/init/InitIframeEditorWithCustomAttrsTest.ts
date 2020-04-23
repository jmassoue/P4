import { Assertions, Logger, Pipeline, Step } from '@ephox/agar';
import { TinyLoader } from '@ephox/mcagar';
import { Element, Attr } from '@ephox/sugar';
import Theme from 'tinymce/themes/silver/Theme';
import { UnitTest } from '@ephox/bedrock-client';

UnitTest.asynctest(
  'browser.tinymce.core.init.InitIframeEditorWithCustomAttrsTest',
  function (success, failure) {

    Theme();

    TinyLoader.setup(function (editor, onSuccess, onFailure) {
      Pipeline.async({}, [
        Logger.t('Check if iframe has the right custom attributes', Step.sync(function () {
          const ifr = Element.fromDom(editor.iframeElement);

          Assertions.assertEq('Id should not be the defined x', true, Attr.get(ifr, 'id') !== 'x');
          Assertions.assertEq('Custom attribute whould have the right value', 'a', Attr.get(ifr, 'data-custom1'));
          Assertions.assertEq('Custom attribute whould have the right value', 'b', Attr.get(ifr, 'data-custom2'));
        }))
      ], onSuccess, onFailure);
    }, {
      base_url: '/project/tinymce/js/tinymce',
      iframe_attrs: {
        'id': 'x',
        'data-custom1': 'a',
        'data-custom2': 'b'
      }
    }, success, failure);
  }
);
