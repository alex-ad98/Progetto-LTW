var app = new Vue({
    el:'#app', //effettua binding con oggetto del dom
    data: {
       total:0.00
    },
    methods:{
        updateTotal: function(n){
            this.total = this.total +n;
        },
        resetTotal: function(){
            this.total = 0;
        }
    }
});