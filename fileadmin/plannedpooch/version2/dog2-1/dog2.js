(function (lib, img, cjs, ss, an) {

var p; // shortcut to reference prototypes
lib.ssMetadata = [];


// symbols:



(lib.Bitmap1 = function() {
	this.initialize(img.Bitmap1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,54,34);


(lib.dog = function() {
	this.initialize(img.dog);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,1340,1106);// helper functions:

function mc_symbol_clone() {
	var clone = this._cloneProps(new this.constructor(this.mode, this.startPosition, this.loop));
	clone.gotoAndStop(this.currentFrame);
	clone.paused = this.paused;
	clone.framerate = this.framerate;
	return clone;
}

function getMCSymbolPrototype(symbol, nominalBounds, frameBounds) {
	var prototype = cjs.extend(symbol, cjs.MovieClip);
	prototype.clone = mc_symbol_clone;
	prototype.nominalBounds = nominalBounds;
	prototype.frameBounds = frameBounds;
	return prototype;
	}


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Bitmap1();
	this.instance.parent = this;
	this.instance.setTransform(-25,-11);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.986,0.169,-0.169,0.986,-897,-637.9)).s().p("ACKCeQg3guACguIABgKIAAgDIAAgCQAAgZgfgXQgngTgcAEQitA0hhAJQhhAJhRAFQgygqgwhPQgwhPgnhrIAWAEQDNAgCgAJQCgAIDAgZQDCgaCDAmQCCAnAqAmQApAmANBgQAKBKiOBzQg+AxhOAAQhnAAiEhXg");
	this.shape.setTransform(6.2,1.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-58.3,-23.3,129.2,49);


(lib.Symbol10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.386,0,0,0.386,-217.1,-118.6)).s().p("Ag2NiQhrhdgtiMIgjA0QgOiTh5hbQg2gpgugxIAJA3QgQgtgUgsQgLgXgOgWIgWg0IglAAQhVm4DOi4QDOi5JNkcQBtClgDC0QgLgIgbB8QgaB8A2CMQA3CMAfAMQBxCDgMCRIgGAnIADADQgIBigaBfQgbBkhIBJQg1A1hBAjQhYAthdAhIgUggQg/AXhAANQgZAEgYAAQgSAAgRgCg");
	this.shape.setTransform(85,86.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol10, new cjs.Rectangle(23.7,0,122.6,173.6), null);


(lib.Symbol8 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.386,0,0,0.386,-296.4,-276.3)).s().p("AgqEqQg2gTglg2QgWgggEg0IgDgbQgEgyAqhAIgahAQADghAggXIgbhJIglhmIgCgEIAdgMIBDC3IAxAPQAGgEAFAMQAQAgANAiQA5gGA/A1QAwAsAJBDQAFBBgiA7QgkAqg4AaQgLABgNAAQgkAAgqgOg");
	this.shape.setTransform(18.2,31.2);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol8, new cjs.Rectangle(0,0,36.4,62.5), null);


(lib.Symbol6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.376,-0.088,0.088,0.376,-327.9,-244.6)).s().p("ApkDjIINtZID0IPIEYgdQHMIOrkDtg");
	this.shape.setTransform(61.3,63.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol6, new cjs.Rectangle(0,0,122.6,126.3), null);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 4
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#FFFFFF").s().p("AD2BqIAngHQAEAdAPAPQAPAOAZAAQAaAAAOgMQANgNAAgTQAAgRgMgJQgIgGgggJQgtgPgPgJQgPgKgJgRQgIgQAAgTQAAgkAXgXQAWgXAqABQAZAAAUAJQATAJAKAQQAKAPAEAdIgmAGQgFgtgsgBQgaABgMAJQgNALAAAPQAAAQAMAIQAHAFAjAMQAxAPAOAKQAOAIAIAQQAIAQAAAVQAAApgZAZQgaAZgsgBQhTABgNhbgAiwCfQgeglAAhGQABhHAegmQAegmAvAAQAsAAAeAlQAdAlAABGIAAANIirAAQADAvAUAYQATAYAbAAQAsAAASg5IAmAGQgIAsgbAYQgaAXgngBQgwAAgfglgAiPgiQgSAVgCAkICAAAQgDgkgNgRQgSgbgdAAQgaAAgTAXgABTC6QgMgJgFgNQgEgOAAgqIAAigIgdAAIAAglIAdAAIAAhFIAmgdIAABiIAnAAIAAAlIgnAAIAACjQABAXADAGQAFAJAOAAQAGAAAKgCIAGArQgQADgNAAQgUAAgNgHgAm0C+IAAmBIAqAAIAAFUICcAAIAAAtgACwg6IgKhJIAAhAIAsAAIAABAIgKBJg");
	this.shape.setTransform(127.3,683.8,1.167,0.931);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.f("#FFFFFF").s().p("AILD1IgGg5QARADAOAAQAaAAAMgPQANgPAGgYIhqkYIBPAAIBDDGIBBjGIBNAAIh1E9QgJAZgJANQgJANgLAJQgMAHgRAEQgRAFgVAAQgVAAgVgFgAy4DzIAAmCIBFAAIAAAqQAOgWAXgMQAXgOAcAAQAxAAAiAnQAiAlAABFQAABFgjAnQgiAngxAAQgXAAgTgJQgTgJgVgXIAACNgAxchFQgSAUAAApQAAAvASAXQATAWAbAAQAaAAARgVQARgUAAguQAAgtgSgVQgRgWgaABQgbgBgSAWgArQB3QgZgXAAgkQAAgYALgSQAMgSAUgJQAVgLAmgHQA0gKAUgIIAAgIQAAgVgLgJQgKgJgdAAQgUAAgLAIQgLAIgHATIhDgMQALgpAcgTQAbgUA3AAQAyAAAYAMQAYALAKATQAKARAAAxIgBBVQAAAlAEASQADASAKATIhJAAIgIgVIgCgJQgTATgWAJQgVAJgZAAQgrAAgZgYgApoAOQgfAGgJAGQgPALAAAQQAAAPAMAMQALALASgBQAUABASgNQAOgLAEgOQADgJAAgbIAAgPQgOAFgfAHgARvCIIAAhKIBKAAIAABKgAPZCIIAAhKIBKAAIAABKgANDCIIAAhKIBKAAIAABKgAGCCIIAAifQAAgpgHgNQgLgPgVAAQgQAAgNAKQgOAJgGATQgGARAAAnIAACGIhKAAIAAiYQAAgpgEgMQgEgLgIgHQgJgFgOAAQgRAAgOAJQgOAJgFASQgGARAAAnIAACIIhLAAIAAkXIBFAAIAAAmQAkgsAzAAQAbAAAUALQATAMANAVQATgVAVgMQAVgLAZAAQAeAAAWANQAVAMALAZQAHARAAAoIAACygAj0CIIAAiOQAAgtgFgNQgFgNgKgIQgLgHgPAAQgUAAgPALQgPAKgGARQgFASAAAtIAAB/IhLAAIAAkXIBFAAIAAAqQAlgwA4AAQAYAAAUAJQAVAJAKAOQALANAEARQAEASAAAhIAACsgAtrCIIAAmBIBKAAIAAGBg");
	this.shape_1.setTransform(318.7,688.1);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_1},{t:this.shape}]}).wait(1));

	// Layer 1
	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.f().s("#DF5A46").ss(0.1,1,1).p("AjTk9QDwEtjwJMQHXoIg2pv");
	this.shape_2.setTransform(415.9,810.5);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.f("#DF5A46").s().p("AVaKVQoYD8rAAVQhBAChBAAQuGAAp+lsQg7gig2gjIOLAAIAA4OIvuAAIPuAAIAAYOIuLAAQoMlXgBnSQABmlGplAQBghIB0hCQJ+lsOGAAQOGAAJ/FsQE0CwCgDTQCpDiAAEKQAAGSmGE3QA2JwnYIHQDxpMjxktgA51H3g");
	this.shape_3.setTransform(257.8,712.6);

	this.shape_4 = new cjs.Shape();
	this.shape_4.graphics.f("#ED826C").s().p("A46VoQgvgjgsgkIE9AAIk9AAQqnomBRpvQAYi6A+i+ILaAAQmqE/AAGkQAAHTINFXQA2AjA7AiQJ+FsOGAAQBBAABAgCQioAqivAeQi1AeiyAAQqyAAponOgA6VUhgAchl3Qp+lsuGAAQuGAAp+FsQh1BDhfBIIraAAQCcnhGNnwQIpqzNoBAQNnBBMPIuQMEInBWKmQifjTk1iwgA27jsg");
	this.shape_4.setTransform(229.3,631.6);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_4},{t:this.shape_3},{t:this.shape_2}]}).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol4, new cjs.Rectangle(0,447,475.6,421.7), null);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.549,0,0,0.549,-450.2,-69.9)).s().p("AjMDkQg3izAtjFIBbhYQE9hOAME7QA7CNg7BvQhthzktBag");
	this.shape.setTransform(19.8,10.1);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = getMCSymbolPrototype(lib.Symbol2, new cjs.Rectangle(-3.7,-15.1,47.1,50.5), null);


(lib.___Camera___ = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		this.visible = false;
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(2));

	// viewfinder
	this.shape = new cjs.Shape();
	this.shape.graphics.f().s("rgba(0,0,0,0)").ss(2,1,1,3,true).p("EAq+AfQMhV7AAAMAAAg+fMBV7AAAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(2));

}).prototype = p = new cjs.MovieClip();


(lib.Symbol7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Symbol8();
	this.instance.parent = this;
	this.instance.setTransform(0,0,1,1,10.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({rotation:30.4},59,cjs.Ease.get(1)).to({rotation:10.2},59,cjs.Ease.get(1)).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-11,0,46.9,67.9);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween3("synched",0);
	this.instance.parent = this;
	this.instance.setTransform(-1.8,6.9,1,1,9.7,0,0,-43,-12.6);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({regX:-42.9,regY:-12.5,rotation:0,skewX:9.7,skewY:10.3,y:8.7},19,cjs.Ease.get(-1)).to({regX:-43,regY:-12.6,rotation:9.7,skewX:0,skewY:0,y:6.9},20,cjs.Ease.get(-1)).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15.1,-6.3,123,65.8);


(lib.Symbol9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 8 (mask)
	var mask = new cjs.Shape();
	mask._off = true;
	mask.graphics.p("AggA4QgogqAUg1QAUg2A5AkQA6AkgmA7QgXAjgWAAQgQAAgQgRg");
	mask.setTransform(373.8,265.5);

	// Layer 7
	this.instance = new lib.Symbol2();
	this.instance.parent = this;
	this.instance.setTransform(368.8,246.5,0.703,0.703,0,0,0,21.7,18.7);

	var maskedShapeInstanceList = [this.instance];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(57).to({regY:18.8,y:265.6},6,cjs.Ease.get(-1)).to({regY:18.7,y:246.5},6,cjs.Ease.get(1)).wait(93).to({regY:18.8,y:265.6},4,cjs.Ease.get(-0.94)).to({regY:18.7,y:246.5},4,cjs.Ease.get(0.81)).wait(1));

	// Layer 8 (mask)
	var mask_1 = new cjs.Shape();
	mask_1._off = true;
	var mask_1_graphics_0 = new cjs.Graphics().p("AgPB+QgjgGgVgSQgqgkgQgoQgOglALgjQAUhEB/gNQCIAOgOCmQgFA5hQAPQgSADgSAAQgQAAgPgCg");
	var mask_1_graphics_59 = new cjs.Graphics().p("AgPB+QgjgGgVgSQgqgkgQgoQgOglALgjQAUhEB/gNQCIAOgOCmQgFA5hQAPQgSADgSAAQgQAAgPgCg");
	var mask_1_graphics_162 = new cjs.Graphics().p("AgPB+QgjgGgVgSQgqgkgQgoQgOglALgjQAUhEB/gNQCIAOgOCmQgFA5hQAPQgSADgSAAQgQAAgPgCg");

	this.timeline.addTween(cjs.Tween.get(mask_1).to({graphics:mask_1_graphics_0,x:311.9,y:262.1}).wait(59).to({graphics:mask_1_graphics_59,x:311.9,y:262.1}).wait(103).to({graphics:mask_1_graphics_162,x:311.9,y:262.1}).wait(9));

	// Layer 7
	this.instance_1 = new lib.Symbol2();
	this.instance_1.parent = this;
	this.instance_1.setTransform(311.3,236.8,0.703,0.703,0,0,0,21.7,18.8);

	var maskedShapeInstanceList = [this.instance_1];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_1;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(57).to({rotation:-9,x:310.8,y:245},0).to({x:313.4,y:269},6,cjs.Ease.get(-1)).to({x:308.4,y:241.6},6,cjs.Ease.get(1)).wait(93).to({rotation:0,x:311.3,y:236.8},0).to({y:262.1},4).to({y:236.8},4).wait(1));

	// Layer 6 (mask)
	var mask_2 = new cjs.Shape();
	mask_2._off = true;
	mask_2.graphics.p("AAsFIIgvgqQiOgygSiMQgHgwg3gfQg4gehngQQA1gHBJABQBJABBogXIB6gbQA/gOATgKQAUgKALgXQALgYAJg/QAJg+APg2QDeAQgpDmQj5G7hDAAQgNAAgGgRg");
	mask_2.setTransform(382.9,360.5);

	// Layer 3
	this.instance_2 = new lib.Symbol1("synched",0);
	this.instance_2.parent = this;
	this.instance_2.setTransform(359.4,366.1,0.463,0.482,-2.5,0,0,38.2,26.5);

	var maskedShapeInstanceList = [this.instance_2];

	for(var shapedInstanceItr = 0; shapedInstanceItr < maskedShapeInstanceList.length; shapedInstanceItr++) {
		maskedShapeInstanceList[shapedInstanceItr].mask = mask_2;
	}

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(171));

	// head
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.386,0,0,0.386,-334.7,-115.6)).s().p("ABrNcIgCAAQgDgCgEAAIgBgDIgCgCIgBgCQgKgBgFACIAAgBIAAgEIgHABIgBABIgGABIAHAFIgygfIABAAIAAgBIAAAAIABgDIABgBQABAAAAAAQAAgBAAAAQAAAAAAAAQAAAAgBAAIABAAQAAgBAAgBQABgBgBAAQAAgBAAAAQAAgBAAAAIgCAAIAAABIAAAAIAAACIgCADIgBABIAAABIgBACIgIgFIAAAAIABgBIAEgDIAAgBIABgBIgBgBIgBABIgBAAIgBAAIAAABIgCABIgBABIgCABIgBgBIAAAAIgEgCIAAAAIADgCIACgCIAAgBIADgBIADgCIABgBIgBgBQAAAAAAAAQgBAAAAAAQAAAAgBAAQAAABAAAAIgBABIgBABIgCgBIgCACIgCADQAAAAgBAAQAAAAAAAAQAAAAgBAAQAAAAAAAAIgCABIAAAAIgMgIIABAAIACABIABgBIgBgCIgEAAIgCABIgUgMIAHAAIADgCQABAAAAgBQAAAAAAAAQAAAAAAAAQgBAAAAAAIgCgBIgLACIgVgNIAAAAIACAAIADAAIABABIAFgBIABAAIAAgCIgFABQAAAAAAgBQgBAAAAAAQAAAAgBAAQAAgBAAAAQgDACgDgCIAAABIgDAAIgPgKIAAAAIABABIABAAIADAAIADABIAEAAIACABIAIABIABgCIgBgBIgHAAIgCgBIAAAAQAAgBgBAAQAAAAAAAAQgBAAAAAAQAAAAgBABIgIgBIgCgBIAAAAIgCgBIgDABIAAgBIgMgHIAAAAIADAAIACAAQABAAAAgBQAAAAAAAAQAAgBAAAAQAAgBgBAAIAAAAIgBgBIgBABIAAAAIgBABIgBAAIgEgBIgBABIAAAAIgEgCIgCgCIACgBIAAgCQAAAAAAAAQgBgBAAAAQAAAAAAAAQAAAAgBABQAAAAgBAAQAAABgBAAQgBAAAAgBQgBAAAAAAIgBAAIgLgHIABABIAEAAIACAAIACAAIADgCQABAAAAgBQAAAAAAAAQAAAAgBAAQAAAAgBAAIgBABIgDAAIgMgBIgFgEIACAAIABABIAAAAIAEAAIAAgBIgBgBIgCAAIgBgBIgBAAIgCAAQgBAAAAAAQgBAAAAAAQAAgBgBAAQAAAAAAAAIAAABIgBAAIgFgDIAFAAIAJABIABABQACgBAEABIABAAIgDgDQAAAAgBAAQAAABgBAAQAAAAgBgBQgBAAAAAAQgEgCgDABIAAgBQgGABgHgCIgCgBIABAAQAAAAAAAAQAAAAABAAQAAgBAAAAQAAAAAAAAIgBAAIAAgBIgFgBIgBAAQABgBAAAAQAAgBAAAAQAAAAgBAAQAAAAgBAAIgBAAIABABIgBAAIgMgIIAFABIACgBIAAgBIgBgBIgHAAQgBAAAAgBQgBAAAAAAQAAAAgBAAQAAgBAAAAIAAABIgMgIIAPADQAAAAAAAAQABAAAAAAQAAAAABAAQAAAAAAAAIABAAIAAgBQgDgCgIgBIgCgBIgCAAIgFAAIgDgBIgLgIIACAAQAEAAAIADIACAAIABABQACABAEgBQABAAAAgBQAAAAAAgBQgBAAAAAAQAAgBgBAAQAAAAgBABQAAAAgBAAQAAAAgBAAQAAAAgBAAIgCgCIgDAAIgIgCIgJgBIAAAAIgFgDIACAAIAFABQABgBAAAAQAAAAAAAAQAAAAAAgBQAAAAgBAAQAAgBAAAAQAAAAgBAAQAAgBAAAAQAAAAgBABIgFAAIgEgBIgHgFIAGAAIAAgBIAAAAIAGABQABgBAAAAQAAgBAAAAQgBAAAAAAQAAgBgBAAIgDAAQgFAAgJgCIgBAAIAAgBIgBAAIgGgEIgEgDIAIABIAAABIACgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIgCgCIgJAAIgDgCIgMgIIACAAIACAAIABABIACAAIADAAIAEABIABgBIABgBIAAAAIAAgBQgBAAAAAAQAAABgBAAQAAAAgBgBQAAAAgBAAIgCAAIgFgBIgEgBIgDAAIgBgBIgCAAIgMgJIACAAIAFACIACgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIgEgBIgDgCIgBAAIgDABIgGgFIAAAAIACgBIgBgBIgBgBIgDAAIgDgBIgSgQIAHACIAGADIAHADQABgBAAAAQAAAAAAAAQAAgBAAAAQAAAAgBAAIgXgKIgCgBIgDgCIgIgIIAAgBIAEABQADACACgBQAAAAAAABQAAAAAAAAQAAAAAAAAQAAABABAAIACAAIAHABIABAAIAAgCIgCgBIgEgBIgDABIgEgCIgEgBIgCgBIgDAAIgGgIQADABADACIAEAAIABAAIAAgBIgBgBIgBAAQgBAAAAAAQgBAAAAAAQgBgBAAAAQgBAAgBgBIgFgCIgCgBIAAAAIgEgFIACAAIAEABIACAAIACAAQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAgBAAAAIgCAAIgCAAIgCgBIgDAAIgCAAIgBgBIgBgBIgDgEIABABIAEAAIACABQAAAAAAAAQABABAAAAQAAAAAAgBQAAAAAAAAIABABIAEABIgBABIACAAIABAAIADABIAAABIAFgBIABgBIAAAAIABAAIgBAAIAAgBIgEAAIgBAAIgBgBQgEAAgBgBIgCAAIAAgBIgCgBIgBAAIgCgBIgCAAIgDAAIgBgCIgBgBIgCABIgGgHIAFABIAFABIADABIAFgBQAAAAAAgBQAAAAAAAAQAAgBAAAAQgBAAAAAAQAAAAgBAAQAAAAAAAAQgBAAAAAAQgBAAAAAAIgDgBIgDAAIgKgCIgGgIIAAAAIACACIADABIABABIACgBIAAAAIAAAAIAAgBIgCgBIgCgBIgCAAIgBgBQAAgBAAAAQAAAAAAAAQgBAAAAAAQAAAAgBAAIgBAAIgHgJIADABIABABIACABQABAAAAAAQAAAAABAAQAAAAAAAAQABAAAAAAQAAgBABAAQAAAAAAAAQAAgBAAAAQAAAAAAAAIgFgCIgBAAIgDgBIgCAAIgBgBIgBgBIgEgFIAFABIACACIACAAIAAgCIgBAAIgCgCQAAAAAAAAQAAgBgBAAQAAAAAAAAQgBAAAAABIgDgBIgCgBIgCAAIgHgJIgHgJIAEAAIACACIAFABIAAACQABAAAAgBQABAAAAAAQABAAAAAAQAAgBAAAAQgCgDgDAAIgDAAIgCgCIgCgBQgBAAAAAAQgBAAAAAAQgBgBAAAAQgBAAAAAAIgBAAIAAAAIgGgHIADACIAFABIACADIACgBQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAAAAAAAIgCgBQAAgBAAAAQgBgBAAAAQAAAAgBAAQgBgBgBAAIgEgCIgCgBIgEgDIgIgKIACAAIABABIAJACIAAAAQABAAAAAAQAAAAABAAQAAAAAAAAQABABAAAAIAEACIABAAQABgBAAAAQAAAAAAgBQAAAAAAAAQgBAAAAAAIgBAAQgBAAAAgBQAAAAAAAAQAAAAAAAAQAAAAAAAAIgCgBIgBgBIgLgCIgCgBIgDgBIgCAAIgEgFIAEAAQAAAAAAAAQAAAAAAgBQAAAAAAAAQAAgBgBAAIgBAAIgDgBIgBAAIgHgJIAAAAQAAgBAAAAQAAAAAAAAQAAAAAAAAQAAgBAAAAIgBgBIgBgCIgBAAIAAAAIgBgBIgBAAIgHgJIADABIACABIAEAAIACAAIgBgCIgCgBIgCABIgEgCIgDAAIgBgBIgBgBIgKgMIADABIgBAAIADABIABAAIAAgCIgCAAIABgBIgHgDIgBAAIgCgDIgDgEIACACIABABIABAAIABgBQABAAAAAAQAAAAAAgBQAAAAAAAAQAAAAgBAAIgBgBIgCgBIgCgBIgDgBIgLgOIAFAEIAFABQAAAAAAgBQAAAAgBgBQAAAAAAAAQgBgBAAAAIgDAAIgCgDIgDgCIgCgBIgCgBIgMgQIAAAAQAAAAAAAAQABAAAAAAQAAABAAAAQAAAAAAABIABAAIAMAHIAFADIACAAQAAgBAAAAQAAgBgBAAQAAAAAAAAQAAgBgBAAIgDAAQAAgBAAAAQgBgBAAAAQAAAAAAAAQAAgBAAAAIgEgBIgIgFIgBgCIgGgCIgKgNIADABIADABIAAAAQABgBAAAAQAAgBAAAAQgBAAAAAAQAAgBgBAAIgDgBIgCAAQgBgBAAAAQAAAAAAAAQAAAAgBgBQAAAAAAAAIgBAAIgOgRIALgEIgSgFQAAgBAFAAQAGAAgBgCIgYhGQgSg1gJgpQgYhvhQh3QhQh4ACiRQACiRAch9QAbh9hthaIAEgRIAMAAIAAgDIAAgEIAAgEQAPAAAPACIABAAQADACAEAAIAAgCQAZgCAZAAIABgDIACgCIABgDQB9gWCJgLIABAAQAHgCAIAAIABgCIACgCIABgDQCrgBCZAhIABABQAFABAGAAIAAADIACACIABADQAngGASAPIACACIADABQABAIAJgCIACgBIADgBIAAACQADABAEAAQACAEADACQADACADgBIABgDIAIAEIACABIABADQAEAAADACQABAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAABIAAAEIAMAAIABADIACACIABACQAMACAIAFIACACIABADQAKADAJAEIADACIABADQAEADAHACIABABQADABAEAAIABADIACACIABADQAKgBAFAGIABACIADABIADAEIACACQAJACAJAAQABAMAPABIABABIADABIADAEIABAEIAAAEQAMABAIAFIACACIABADQAHACAFAFIACACIABADIAnADIADABIABADIADABIABABQAHACAIAAIABADIACACIABADQAGAAAFACIABAAIALACIABADIACACIABADQAYAGAVALQABAAAAAAQAAAAAAAAQAAAAAAABQAAAAAAABIAAAEIAPAQIABADIAAAEIAWAQIABADIAAAEQAEADAHADIABAAQADACAEAAIABADIACACIABACQALABAEAHIAAAEIAAAEIAEACIALADIABADIANAWQAAAAAAAAQAAAAAAAAQABAAAAAAQAAAAAAAAIABgDQACAGgVAJIgDABIgBADQgBALAIACIABADIAAADQAHACAHAEIABACIAAAEIALAEIALAgQAVA8gjBhIgwBiQANAmgHA+IgDAIQBGA4AoAhQAnAgAMAIQAgAdAOAdQANAdAGATIAIAFIAAAEIADABIACACIADABQAAAIADAEIAAAEIAAADQAHACADAFIABACIABADQAIADAFAIIACACIAAACQAKAEAFAJIACACIADABIADAPIABADQADABAEAAQgCAIAGACIABABIADABQAFAFgBAKQAAABAAAAQAAAAAAABQAAAAAAAAQABAAAAABQADABAEAAIAOAYIACACQADABAEAAQAfBQgLBWIglAoIgCAAIgBABIgDABIABADIgIAJIgBAAIgBABIgyA2IgGgKQgIgIgpAaQgpAagmgDIg+gGQgZgCgoAWIgfAQQgQAIgMABQhPAGhQgJIgJAAQANAQALATQAMASBCALIAggOQAWgJAMAIQAMAJANACQAOAAAvgTIApADIAaAXIABAaQgHBDhfBDIgIAEIgCAAQgFACgGAAIAAAEIAAAEIAAAAIgFAGIACgBIgPAEIgCABQgDABgEAAIAAADIgBAAIgCACIAAADIgSACQgfACgeAAQhqAAhgglgAsrs6IALAIIgCAFgAsgsyIAAAAg");
	this.shape.setTransform(335.2,295.8);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(171));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(254,206.1,162.4,179.5);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_120 = function() {
		this.gotoAndPlay(83);
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(120).call(this.frame_120).wait(1));

	// Layer 5
	this.instance = new lib.Symbol7();
	this.instance.parent = this;
	this.instance.setTransform(296.8,456.5,1,1,0,0,0,18.2,31.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(121));

	// Layer 14
	this.instance_1 = new lib.Symbol10();
	this.instance_1.parent = this;
	this.instance_1.setTransform(205.6,298.9,1,1,0,0,0,73,86.8);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(34).to({regX:121.9,regY:16.6,x:254.5,y:228.7},0).to({regY:16.7,rotation:-20.9,x:230.8,y:240.7},17,cjs.Ease.get(1)).to({regX:122,rotation:-14,x:230.9},15,cjs.Ease.get(1)).to({regX:121.9,regY:16.8,rotation:-16.9,x:230.8,y:240.8},17,cjs.Ease.get(1)).to({regX:122,rotation:-14.2},20,cjs.Ease.get(1)).to({regX:121.9,rotation:-16.9},17,cjs.Ease.get(1)).wait(1));

	// head
	this.instance_2 = new lib.Symbol9();
	this.instance_2.parent = this;
	this.instance_2.setTransform(285.2,338.5,1.049,1.049,-4.4,0,0,286.7,330.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(34).to({regX:286.6,rotation:-14.9,y:338.6},17,cjs.Ease.get(1)).wait(70));

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.dog, null, new cjs.Matrix2D(0.386,0,0,0.386,-247.5,-148.8)).s().p("AwDXQIAAzlQAQgDASgBIABAAQARgCARAAIABgDIACgCIABgDQAZgDAYgGIACgBIADgBQgDAXAhgNIABAAQANABANAAIABADIADACIABADIAPADIAHADIAAACQAOgEANgFIgBgCIgCgBQApgHAzgOIABgBIADgBQgBgWgMgMIgCgCIAAgCIgRgLIgBgCIgBgDQgIgIgLgFIgCgBIgDgBQgBgHgGgDQAAAAAAAAQAAAAAAAAQAAAAAAgBQgBAAAAgBIAAgEQgJAAgKgCIAAgCQgRgdgMgkIAAgBIgBgDQgHgFgNgBIABgBIADgBIgHgTIgBgEIAAgEQgaACgLgOIgEgEIgBgCIABgGIArgIQAPAWAKAWQAVAsAPAtIgJg3QAvAxA1ApQB5BbAyBfIDYCPQgVBeAqgGQBAgNA/gXIAUAgQBdghBXgtQBBgjA1g1QBIhJAbhkQAahfAIhiQCdCGCnBVQCvBYA/AuQBAAtABAaQAPAnARAdQgJAAgEACIAAgBIAAgEIgHABIgBABQgGACgFAAQgDADgDACIgGAEIgBACQALACAIAEIACABIADABQACAIAFAEIABADIAAAEQgHAGgBAKIABACIADABQgBAMgGAFIgBADIAAAEQAAADACADIABACIABADQgFAJgDALIAAADIAAAEIAAACQgIACgIAAQADAKgFADIgBACIAAAEQAJAEgIAFIgBADIAAAEQAAAEACADIABABIAAADIgGAJIgBADIAAAEIAHAMIAAADIAAAEQgPAKgFAUIgBACIgBADQgJAEgDALIgBADIgDABQgCAJgFAHIgBADIAAAEQADAJAFAHIAAACQgEABgEAAQABANgPgKIgBgBQgPgCgQAAQAAANgFgIQAAAAAAAAQAAAAgBAAQAAAAAAAAQAAAAgBAAIgBADQgEALgFgGIgBgCIgBgDIgLAAIAAgEQAAAAgBgBQAAAAAAAAQAAgBAAAAQAAAAgBAAQgDgCgDAAIgBgCIgDgCIgBgDQgQgGgSAEIgBgBQgDgBgDAAQAAgBgBAAQAAgBAAAAQAAAAAAAAQAAgBgBAAIgCgCIgBgDQgRAAgRACIgBACQgCANgFAKIAAAEIAAAEQAHACAAAJIAAAEIAAAEQgIAJgCAOIgBADIgIABQgDgIgIgBIgBABIgDAAQgBgKABgFIgDACQAAAAAAAAQgBAAAAAAQAAAAAAABQAAAAAAABQgFAIAFAPIAAAEIAAAEIAHAFIABACIAAAEIgHgEIgCgCIgDgBQgBAKAGAEQAAAAABABQAAAAAAAAQAAAAABAAQAAgBAAAAIABgDQAFAMgJANIAAgCIAAgDQgEgKAAANIAAAEIAAAEQADALgKgBIABABIACABQACAIAGABIAAACIAAAEQgNACAMALIABABQgEACgEAAQgEBJAbBkIACADIACABQAAAGgCADQgDADgFABIgBACQABANgEAHIgCADIgDABQAAAAAAABQAAAAAAAAQAAABABAAQAAAAAAAAIACACIABADIgDAFIgBADIAAAEIgLAAIgBgDIgDgCIgBgDIgOACIgBACQgTAbgCAsIgBgBQgehbg0gvQgzA4gRggQgFgMgIgjQgZgYgZAqIgEgvIg8iCIgdAMIACAEQgaBAgIAoIgDgEQgDgFgDABQAAABgBAAQAAABAAAAQgBABAAAAQAAABAAAAIACAFIAHANIgBALIgCgBIgEgCQgDgEgCAAQgFgCgBAFQAAACADADIADAEIAFABQADABADAGIABACQADAQALAHQALAHAJAIIABACIACAEIAFACIABADIABACIACABIAGAJIgJgIIgIgFQgDgDgDAAQgFgBAAAEQAAAEAFACQALAFAIAMIAGALIADADIAAA0IgQghQgCgEgCgCQgEgDgDABQgBAAAAABQAAAAgBAAQAAAAAAABQAAAAgBABQAAAAAAABQAAAAAAABQAAAAAAAAQAAABAAAAIAEADQACABABAEIAKASIANAbIAAAQIgLBKIgCgGQgBgEgBgHIAAgMIgJggQAAgFgCgCQAAgBgBAAQAAAAAAAAQgBgBAAAAQgBAAgBAAQAAAAgBAAQAAAAgBAAQAAABAAAAQgBAAAAABIAAAEIAFATIAEATIABAMQABAGABAFIAEAKIAAAKIACAIIAAABIAGAUIgHgEIgPgIQgIgFgIgBQgDgBgCABQgCAEAEADIAGACQAHABAMAJIASAKIAPA/gADtktQAmBOASA/QAUBLgGBGIhGkegAt9g2IgDgCIgBgDQgDAKgLgIIgBgCIAAgEQgGgBADgFIAYgGIAEAdIgGgIgAu9hUIgBgCIAAgEIABgBIADAKIgDgDgAvYhvIgBgCQgJgCAIgEIABgCIAAgEIADgBIABgCIADgBQABgFACgDIAHAUQgHACgFAEIgCABIgCgBgAwD3PMAgHAAAIAAEUQm2henrAhIgdB6IgKgIIAJANIABgFQBuBagUB9QgQBhgLBvIhsm6IwcH7g");
	this.shape.setTransform(248,329);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(121));

	// Layer 14
	this.instance_3 = new lib.Symbol10();
	this.instance_3.parent = this;
	this.instance_3.setTransform(379.2,310.1,0.838,0.886,0,15,-165,72.8,86.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(34).to({regX:121.8,regY:16.6,scaleX:1,scaleY:1,x:346,y:235.5},0).to({regX:121.7,skewX:24,skewY:-156,x:342.7,y:236.4},17,cjs.Ease.get(1)).to({skewX:16.8,skewY:-163.2,x:342.6},15,cjs.Ease.get(1)).to({regY:16.7,skewX:19.7,skewY:-160.3,y:236.5},17,cjs.Ease.get(1)).to({regX:121.6,skewX:21,skewY:-159,x:342.7,y:236.6},20,cjs.Ease.get(1)).to({regX:121.7,skewX:19.7,skewY:-160.3,x:342.6,y:236.5},17,cjs.Ease.get(1)).wait(1));

	// Layer 16
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img.dog, null, new cjs.Matrix2D(0.399,0,0,0.399,-267,-220.5)).s().p("EgptAicMAAAg2nIOyuQIF1AAQBNLtBbLsQAcDjBQDVQBcDyDoEEQDqEFFaCvQFYCvDRDHMAjvgJlIAAbrg");
	this.shape_1.setTransform(262.7,394.9);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(121));

	// Layer 9
	this.instance_4 = new lib.Symbol6();
	this.instance_4.parent = this;
	this.instance_4.setTransform(314.2,316.6,1,1,0,120,-60,52.4,63.1);
	this.instance_4.filters = [new cjs.ColorFilter(0.9, 0.9, 0.9, 1, 25.5, 25.5, 25.5, 0)];
	this.instance_4.cache(-2,-2,127,130);

	this.instance_5 = new lib.Symbol6();
	this.instance_5.parent = this;
	this.instance_5.setTransform(272.6,447.9,1,1,0,0,0,52.5,63.1);
	this.instance_5.filters = [new cjs.ColorFilter(0.9, 0.9, 0.9, 1, 25.5, 25.5, 25.5, 0)];
	this.instance_5.cache(-2,-2,127,130);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance_5},{t:this.instance_4}]}).wait(121));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-4.3,174.5,534,440.9);


// stage content:
(lib.dog2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_107 = function() {
		this.stop();
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).wait(107).call(this.frame_107).wait(64));

	// Camera
	this.___camera___instance = new lib.___Camera___();
	this.___camera___instance.parent = this;
	this.___camera___instance.setTransform(368,303.5);

	this.timeline.addTween(cjs.Tween.get(this.___camera___instance).wait(171));

	// Layer 10
	this.instance = new lib.Symbol4();
	this.instance.parent = this;
	this.instance.setTransform(368.7,204,0.035,0.035,0,0,0,398.2,850.7);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(33).to({_off:false},0).to({regX:398.6,regY:850.5,scaleX:0.47,scaleY:0.47},26,cjs.Ease.get(1)).wait(112));

	// Layer 12
	this.instance_1 = new lib.Symbol5();
	this.instance_1.parent = this;
	this.instance_1.setTransform(368,303.5,1,1,0,0,0,368,303.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(171));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(363.7,302.5,741.3,616.3);
// library properties:
lib.properties = {
	width: 736,
	height: 607,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/Bitmap1.png?1492680770947", id:"Bitmap1"},
		{src:"images/dog.jpg?1492680770947", id:"dog"}
	],
	preloads: []
};




})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{}, AdobeAn = AdobeAn||{});
var lib, images, createjs, ss, AdobeAn;