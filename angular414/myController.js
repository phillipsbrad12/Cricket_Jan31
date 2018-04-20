app.controller("ScoreboardController", function ScoreboardController() {
    this.count = 0;
    this.value = 20;
    this.total = function total() {
    	return this.count * this.value;
    };

    
});