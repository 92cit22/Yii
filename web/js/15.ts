class ElemBuilder {
	private currentElement: HTMLElement;
	public subBuilder: ElemBuilder;
	public style: CSSStyleDeclaration;

	public get height() {
		return this.style.height
	}
	public get width() {
		return this.style.width
	}

	constructor(element: HTMLElement = null) {
		this.currentElement = element !== null ? element : document.body;
		this.style = this.currentElement.style;
	}

	createSubElement(tag: string) {
		let elem = document.createElement(tag);
		elem.style.margin = this.currentElement.style.margin;
		this.subBuilder = new ElemBuilder(elem);
		this.currentElement.appendChild(elem);
		return this.subBuilder;
	}

	append(elem: string | Node) {
		this.currentElement.append(elem);
		return this;
	}

	setBorder() {
		this.style.border = "1px solid black";
		return this;
	}

	setHeight(newHeight: string) {
		this.style.height = newHeight;
		return this;
	}

	setWidth(newWidth: string) {
		this.style.width = newWidth;
		return this;
	}

	setStyle(property: string, value: string | null, priority?: string) {
		this.style.setProperty(property, value, priority);
		return this;
	}
}

let body = new ElemBuilder();
body.setHeight("98vh");
body.style.textAlign = "center";
body.style.verticalAlign = "middle";
body.style.fontSize = "16pt";
body.style.margin = "auto";
body.style.paddingTop = "2vh";

let header = body.createSubElement('div');
header.setHeight("10%")
	.setWidth("90%")
	.setBorder()
	.createSubElement('p')
	.append('Header');


let subHeader = body.createSubElement('div');
subHeader.setHeight("5%")
	.setWidth("90%")
	.createSubElement('p')
	.append('SubHeader');

let nav = body.createSubElement('div');
nav.setHeight("10%")
	.setWidth("90%")
	.setBorder()
	.createSubElement('p')
	.append('Navigation bar');

let subNav = body.createSubElement('div');
subNav.setHeight("5%")
	.createSubElement('p')
	.append('Sub Nav');

let composeHeight = "50%";
let main = body.createSubElement('div');
main.setHeight(composeHeight)
	.setWidth("66%")
	.setStyle('display', 'inline-block')
	.setBorder()
	.createSubElement('p')
	.append('Main menu');

let subMain = body.createSubElement('div');
subMain.setHeight(composeHeight)
	.setStyle('display', 'inline-block')
	.setBorder()
	.createSubElement('p')
	.setStyle("transform", "rotate(90deg) translateX(40px)")
	.setStyle("overflow-wrap", "unset")
	.append('Sub main')


let side = body.createSubElement('div');
side.setHeight(composeHeight)
	.setWidth("20%")
	.setStyle('display', 'inline-block')
	.setBorder()
	.createSubElement('p')
	.append('Side bar');

let subCompose = body.createSubElement('div');
subCompose.setHeight("5%")
	.setWidth("90%")
	.createSubElement('p')
	.append('Sub compose');

let footer = body.createSubElement('div');
footer.setHeight("10%")
	.setWidth("90%")
	.setBorder()
	.createSubElement("p")
	.append("Footer");
