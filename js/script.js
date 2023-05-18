
const {createApp} = Vue;

createApp({
  
  data(){
    return{
      apiUrl:'server.php',
      tasks:[

      ],
      error:'',
      newTask: '',
    }
    },
  
    methods:{

      getApi(){
        axios.get(this.apiUrl)
        .then(result => {
          console.log(result.data)
          
          this.tasks = result.data
        })
      },

      remove(i){
        if (this.tasks[i].done) {
          this.tasks.splice(i,1)
          this.error = '';
        }else{
          this.error = "Puoi eliminare il task solo se é giá stato barrato!!"
        }
      },

      add(i){
        if (this.newTask.length >3) {
          const taskAdded = {
            text: this.newTask,
            done: false,
          };
          this.tasks.push(taskAdded);
          this.error = '';
          this.newTask = '';
        }else{
          this.error = "Scrivi qualcosa di senso compiuto"
        }
      }
    },

    mounted(){
      this.getApi()
    }
}).mount('#app')