var ElemBuilder = /** @class */ (function () {
    function ElemBuilder(element) {
        if (element === void 0) { element = null; }
        this.currentElement = element !== null ? element : document.body;
        this.style = this.currentElement.style;
    }
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
    ElemBuilder.prototype.createSubElement = function (tag) {
        var elem = document.createElement(tag);
        elem.style.margin = this.currentElement.style.margin;
        this.subBuilder = new ElemBuilder(elem);
        this.currentElement.appendChild(elem);
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
    return ElemBuilder;
}());
var body = new ElemBuilder();
body.setHeight("98vh");
body.style.textAlign = "center";
body.style.verticalAlign = "middle";
body.style.fontSize = "16pt";
body.style.margin = "auto";
body.style.paddingTop = "2vh";
var header = body.createSubElement('div');
header.setHeight("10%")
    .setWidth("90%")
    .setBorder()
    .createSubElement('p')
    .append('Header');
var subHeader = body.createSubElement('div');
subHeader.setHeight("5%")
    .setWidth("90%")
    .createSubElement('p')
    .append('SubHeader');
var nav = body.createSubElement('div');
nav.setHeight("10%")
    .setWidth("90%")
    .setBorder()
    .createSubElement('p')
    .append('Navigation bar');
var subNav = body.createSubElement('div');
subNav.setHeight("5%")
    .createSubElement('p')
    .append('Sub Nav');
var composeHeight = "50%";
var main = body.createSubElement('div');
main.setHeight(composeHeight)
    .setWidth("66%")
    .setStyle('display', 'inline-block')
    .setBorder()
    .createSubElement('p')
    .append('Main menu');
var subMain = body.createSubElement('div');
subMain.setHeight(composeHeight)
    .setStyle('display', 'inline-block')
    .setBorder()
    .createSubElement('p')
    .setStyle("transform", "rotate(90deg) translateX(40px)")
    .setStyle("overflow-wrap", "unset")
    .append('Sub main');
var side = body.createSubElement('div');
side.setHeight(composeHeight)
    .setWidth("20%")
    .setStyle('display', 'inline-block')
    .setBorder()
    .createSubElement('p')
    .append('Side bar');
var subCompose = body.createSubElement('div');
subCompose.setHeight("5%")
    .setWidth("90%")
    .createSubElement('p')
    .append('Sub compose');
var footer = body.createSubElement('div');
footer.setHeight("10%")
    .setWidth("90%")
    .setBorder()
    .createSubElement("p")
    .append("Footer");
//# sourceMappingURL=15.js.map