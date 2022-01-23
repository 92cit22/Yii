var ElemBuilder = /** @class */ (function () {
    function ElemBuilder(element) {
        if (element === void 0) { element = null; }
        this.currentElement = element !== null ? element : document.body;
        this.style = this.currentElement.style;
    }
    Object.defineProperty(ElemBuilder.prototype, "element", {
        get: function () {
            return this.currentElement;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(ElemBuilder.prototype, "height", {
        get: function () {
            return this.style.height;
        },
        enumerable: false,
        configurable: true
    });
    Object.defineProperty(ElemBuilder.prototype, "width", {
        get: function () {
            return this.style.width;
        },
        enumerable: false,
        configurable: true
    });
    ElemBuilder.prototype.appendNewElement = function (tag) {
        this.appendElement(this.createSubElement(tag));
        return this.subBuilder;
    };
    ElemBuilder.prototype.appendElement = function (elem) {
        this.subBuilder = new ElemBuilder(elem);
        this.currentElement.appendChild(elem);
        return this.subBuilder;
    };
    ElemBuilder.prototype.prependNewElement = function (tag) {
        this.prependElement(this.createSubElement(tag));
        return this.subBuilder;
    };
    ElemBuilder.prototype.prependElement = function (elem) {
        this.subBuilder = new ElemBuilder(elem);
        this.currentElement.prepend(elem);
        return this.subBuilder;
    };
    ElemBuilder.prototype.append = function (elem) {
        this.currentElement.append(elem);
        return this;
    };
    ElemBuilder.prototype.setBorder = function () {
        this.style.border = "1px solid black";
        return this;
    };
    ElemBuilder.prototype.setHeight = function (newHeight) {
        this.style.height = newHeight;
        return this;
    };
    ElemBuilder.prototype.setWidth = function (newWidth) {
        this.style.width = newWidth;
        return this;
    };
    ElemBuilder.prototype.setStyle = function (property, value, priority) {
        this.style.setProperty(property, value, priority);
        return this;
    };
    ElemBuilder.prototype.addClass = function (className) {
        this.currentElement.classList.add(className);
        return this;
    };
    ElemBuilder.prototype.appendElemSize = function () {
        this.appendNewElement('p').append("Cell size " + this.width + "*" + this.height);
        return this;
    };
    ElemBuilder.prototype.setEmpty = function () {
        return this.addClass("empty")
            .setStyle('color', 'black')
            .setStyle('background-color', 'white')
            .appendNewElement('p')
            .append('empty cell size 900px*30px');
    };
    ElemBuilder.prototype.createSubElement = function (tag) {
        var elem = document.createElement(tag);
        this.addEvents(elem);
        this.subBuilder = new ElemBuilder(elem);
        return elem;
    };
    ElemBuilder.prototype.addEvents = function (elem) {
        switch (elem.tagName) {
            case 'P':
                elem.onmouseenter = function (event) {
                    switchColor(event.target);
                };
                elem.onmouseleave = function (event) {
                    switchColor(event.target);
                };
                break;
            case 'DIV':
                elem.onclick = function (event) {
                    switchPreviousSibling(event.currentTarget);
                };
                elem.ondblclick = function (event) {
                    switchNextSibling(event.currentTarget);
                };
                break;
            default:
        }
    };
    return ElemBuilder;
}());
function switchPreviousSibling(element) {
    var sibling = element.previousElementSibling.previousElementSibling;
    if (sibling === null)
        sibling = element.parentElement.lastElementChild;
    switchSibling(element, sibling);
}
function switchNextSibling(element) {
    var sibling = element.nextElementSibling.nextElementSibling;
    if (sibling === null)
        sibling = element.parentElement.firstElementChild;
    switchSibling(element, sibling);
}
function switchSibling(element, sibling) {
    var children = element.children;
    var sibChildren = sibling.children;
    for (var j = children.length; j > 0; j--) {
        element.append(sibChildren[0].cloneNode(true));
        sibChildren[0].remove();
        sibling.append(children[0].cloneNode(true));
        children[0].remove();
    }
}
function switchColor(element) {
    var col = element.parentElement.style.color;
    element.parentElement.style.color = element.parentElement.style.backgroundColor;
    element.parentElement.style.backgroundColor = col;
}
var body = new ElemBuilder();
body.style.textAlign = "center";
body.style.verticalAlign = "middle";
body.style.fontSize = "16pt";
body.style.margin = "auto";
body.element.innerHTML = "";
var styles = body.appendNewElement("style");
styles.append("\np{\n    width:max-content;\n    margin: auto;\n}\ndiv{\n    margin: auto;\n    box-sizing: border-box;\n}\n.empty{\n}\n.rotate > p{\n    transform: rotate(90deg);\n    transform-origin: left bottom;\n    margin: 30px 0;\n}\n");
var header = body.appendNewElement('div');
header.setHeight("125px")
    .setBorder()
    .setWidth("900px")
    .setStyle("color", "red")
    .appendElemSize()
    .prependNewElement('p')
    .append("Header")
    .appendNewElement("br");
var subHeader = body.appendNewElement('div');
subHeader.setHeight("30px")
    .setWidth("900px")
    .setEmpty();
var horizontal = body.appendNewElement('div');
horizontal.setHeight("35px")
    .setBorder()
    .setWidth("900px")
    .setStyle("color", "blue")
    .appendElemSize()
    .prependNewElement('p')
    .append("Horizontal menu")
    .appendNewElement("br");
var subNav = body.appendNewElement('div');
subNav.setHeight("30px")
    .setWidth("900px")
    .setStyle('backgroundColor', 'white')
    .setEmpty();
var composeHeight = "500px";
var main = body.appendNewElement('div');
main.setHeight(composeHeight)
    .setWidth("612px")
    .setStyle('display', 'inline-block')
    .setStyle('color', 'green')
    .setBorder()
    .appendElemSize()
    .prependNewElement('p')
    .append('Main menu');
var subMain = body.appendNewElement('div');
subMain.setHeight(composeHeight)
    .setWidth("30px")
    .setStyle('display', 'inline-block')
    .addClass("rotate")
    .setEmpty();
var side = body.appendNewElement('div');
side.setHeight(composeHeight)
    .setWidth("266px")
    .setStyle('display', 'inline-block')
    .setStyle('color', 'blue')
    .setBorder()
    .appendElemSize()
    .prependNewElement('p')
    .append('Side bar');
var subCompose = body.appendNewElement('div');
subCompose.setHeight("30px")
    .setWidth("900px")
    .setEmpty();
var footer = body.appendNewElement('div');
footer.setHeight("190px")
    .setBorder()
    .setWidth("900px")
    .setStyle("color", "red")
    .appendElemSize()
    .prependNewElement('p')
    .append("Footer");
//# sourceMappingURL=15.js.map