import { Arr } from '@ephox/katamari';
import { Body, Insert, Element, Traverse, Remove } from '@ephox/sugar';

import { AlloyComponent } from '../../api/component/ComponentApi';
import { GuiSystem } from '../../api/system/Gui';
import * as InternalAttachment from '../../system/InternalAttachment';

const attach = (parent: AlloyComponent, child: AlloyComponent): void => {
  attachWith(parent, child, Insert.append);
};

const attachWith = (parent: AlloyComponent, child: AlloyComponent, insertion: (parent: Element, child: Element) => void): void => {
  parent.getSystem().addToWorld(child);
  insertion(parent.element(), child.element());
  if (Body.inBody(parent.element())) { InternalAttachment.fireAttaching(child); }
  parent.syncComponents();
};

const doDetach = (component: AlloyComponent) => {
  InternalAttachment.fireDetaching(component);
  Remove.remove(component.element());
  component.getSystem().removeFromWorld(component);
};

const detach = (component: AlloyComponent): void => {
  const parent = Traverse.parent(component.element()).bind((p) => {
    return component.getSystem().getByDom(p).toOption();
  });

  doDetach(component);
  parent.each((p) => {
    p.syncComponents();
  });
};

const detachChildren = (component: AlloyComponent): void => {
  // This will not detach the component, but will detach its children and sync at the end.
  const subs = component.components();
  Arr.each(subs, doDetach);
  // Clear the component also.
  Remove.empty(component.element());
  component.syncComponents();
};

const attachSystem = (element: Element, guiSystem: GuiSystem): void => {
  attachSystemWith(element, guiSystem, Insert.append);
};

const attachSystemAfter = (element: Element, guiSystem: GuiSystem): void => {
  attachSystemWith(element, guiSystem, Insert.after);
};

const attachSystemWith = (element: Element, guiSystem: GuiSystem, inserter: (marker: Element, element: Element) => void): void => {
  inserter(element, guiSystem.element());
  const children = Traverse.children(guiSystem.element());
  Arr.each(children, (child) => {
    guiSystem.getByDom(child).each(InternalAttachment.fireAttaching);
  });
};

const detachSystem = (guiSystem: GuiSystem): void => {
  const children = Traverse.children(guiSystem.element());
  Arr.each(children, (child) => {
    guiSystem.getByDom(child).each(InternalAttachment.fireDetaching);
  });
  Remove.remove(guiSystem.element());
};

export {
  attach,
  attachWith,
  detach,
  detachChildren,

  attachSystem,
  attachSystemAfter,

  detachSystem
};
