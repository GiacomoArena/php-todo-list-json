
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
        console.log(i);
        const data = {
          delete: i 
        }
        axios.post(this.apiUrl,data,{
          headers:{'Content-Type':'multipart/form-data'}
        }).then(result => {
          this.tasks = result.data
          console.log(result.data)
        })
        /*if (this.tasks[i].done) {
          //aggiunta task sul json
        }else{
          this.error = "Puoi eliminare il task solo se é giá stato barrato!!"
        }*/
      },

      add(i){
        /*if (this.newTask.length >3) {
          const taskAdded = {
            text: this.newTask,
            done: false,
          };
          this.tasks.push(taskAdded);
          this.error = '';
          this.newTask = '';
        }else{
          this.error = "Scrivi qualcosa di senso compiuto"
        }*/
        const data = {
          task:{
            text: this.newTask,
            done: false
          } 
        }
        //aggiunta task sul json
        axios.post(this.apiUrl,data,{
          headers:{'Content-Type':'multipart/form-data'}
        }).then(result => {
          this.newTask = '';
          this.tasks = result.data;
          console.log(result.data);
        })

      },
    },

    mounted(){
      this.getApi()
    }
}).mount('#app')