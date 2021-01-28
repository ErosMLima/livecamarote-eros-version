function bfs(graph, root){
	var nodesLen = {};

	for (var i = 0; i < graph.length; i++) {
		nodesLen[i] = Infinity;
	}

	nodesLen[root] = 0;

	var queue = [root];
	var current;

	while (queue.length != 0) {
		current = queue.shift();

		var curConnected = graph[current];
		var neighborIdx = [];
		var idx = curConnected.indexOf(1);
		while (idx != -1) {
			neighborIdx.push(idx);
			idx = curConnected.indexOf(1, idx + 1);
		}

		for (var j = 0; j < neighborIdx.length; j++) {
			if (nodesLen[neighborIdx[j]] == Infinity) {
				nodesLen[neighborIdx[j]] = nodesLen[current] + 1;
				queue.push(neighborIdx[j]);
			}
		}	
	}
		return nodesLen;
};

	var exBFSGraph = [
		[0, 1, 1, 1, 0],
		[0, 0, 1, 0, 0],
		[1, 1, 0, 0, 0],
		[0, 0, 0, 1, 0],
		[0, 1, 0, 0, 0],
	];
	console.log(bfs(exBFSGraph, 1));








var letters = [];

var word = "racecar"

var rword = "";

for (var i = 0; i < word.length; i++){
	letters.push(word[i]);
}	

for (var i = 0; i < word.length; i++) {
	rword += letters.pop();
}

if (rword === word) {
	console.log(word + " is a polindrome.");
}

else {
	console.log(word + "is not a polindrome.");
}


var Stack = function (){
	this.count = 0;
	this.storage = {};

	this.push = function(value) {
		this.storage[this.count] = value;
		this.count++;
	}
	this.pop = function() {
		if (this.count === 0){
			return undefined;
		}
		this.count--;
		var result = this.storage[this.count];
		delete this.storage[this.count];
		return result;
	}
	this.size = function(){
		return this.count; 
	}
	this.peek = function(value){
		return this.storage[this.count-1];
	}
}

var myStack = new Stack();

myStack.push(1);
myStack.push(2);
console.log(myStack.peek());
console.log(myStack.pop());
console.log(myStack.peek());
myStack.push("freeCodeCamp");
console.log(myStack.size());
console.log(myStack.peek());
console.log(myStack.pop());
console.log(myStack.peek());
































