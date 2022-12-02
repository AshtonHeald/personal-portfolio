// Source - Compiled JS
// https://codepen.io/apedesign_alessandropellizzari/pen/yLaYVex
// =========================================================================================
//"use strict";
class SnowItem {
	constructor(canvas, ctx, options) {
		const { radius, speed, wind, color } = options;
		this.params = {
			color,
			x: _.random(0, canvas.offsetWidth),
			y: _.random(-canvas.offsetHeight, 0),
			radius: _.random(...radius),
			speed: _.random(...speed),
			wind: _.random(...wind),
			isResized: false,
		};
		this.canvas = canvas;
		this.ctx = ctx;
	}
	updateData() {
		this.params.x = _.random(0, this.canvas.offsetWidth);
		this.params.y = _.random(-this.canvas.offsetHeight, 0);
	}
	translate() {
		this.params.y += this.params.speed;
		this.params.x += this.params.wind;
	}
	onDown() {
		if (this.params.y < this.canvas.offsetHeight) return;
		if (this.params.isResized) {
			this.updateData();
			this.params.isResized = false;
		} else {
			this.params.y = 0;
			this.params.x = _.random(0, this.canvas.offsetWidth);
		}
	}
	resized() {
		this.params.isResized = true;
	}
	draw() {
		this.ctx.beginPath();
		this.ctx.arc(this.params.x, this.params.y, this.params.radius, 0, 2 * Math.PI);
		this.ctx.fillStyle = this.params.color;
		this.ctx.fill();
		this.ctx.closePath();
	}
	update() {
		this.translate();
		this.onDown();
	}
}
// =========================================================================================
class Snow {
	constructor(canvas, count, options = {}) {
		this.defaultOptions = {
			color: "#EBEBEB",
			radius: [0.5, 3.0],
			speed: [1, 3],
			wind: [-0.5, 3.0],
		};
		this.countSnowFlakes = count;
		this.options = Object.assign({}, this.defaultOptions, options);
		this.canvas = canvas;
		this.ctx = canvas.getContext("2d");
		this.snowFlakes = [];
		this.init();
		this.resize();
	}
	add(item) {
		this.snowFlakes.push(item);
	}
	update() {
		_.forEach(this.snowFlakes, (el) => el.update());
	}
	resize() {
		this.ctx.canvas.width = this.canvas.offsetWidth;
		this.ctx.canvas.height = this.canvas.offsetHeight;
		_.forEach(this.snowFlakes, (el) => el.resized());
	}
	draw() {
		this.ctx.clearRect(0, 0, this.canvas.offsetWidth, this.canvas.offsetHeight);
		_.forEach(this.snowFlakes, (el) => el.draw());
	}
	events() {
		window.addEventListener("resize", this.resize.bind(this));
	}
	loop() {
		this.draw();
		this.update();
		window.requestAnimationFrame(this.loop.bind(this));
	}
	init() {
		_.times(this.countSnowFlakes, () => this.add(new SnowItem(this.canvas, this.ctx, this.options)));
		this.events();
		this.loop();
	}
}
const canvas = document.getElementById("snow");
new Snow(canvas, 1000);
