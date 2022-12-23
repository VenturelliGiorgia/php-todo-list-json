const { createApp } = Vue;
const app = createApp({
    data() {
        return {
            taskList: [],
            newTaskData: {
                name: "",
            },
        };
    },
    methods: {
        /**
         * Esegue una chiamata API in GET per recuperare la lista dei post
         * e salvarli nella variabile locale postsList.
         */
        fetchData() {
            axios.get("api/task.php").then((resp) => {
                this.taskList = resp.data;
            });
        },
        taskSubmit() {
            axios.post('api/createTask.php', this.newTaskData, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then((resp) => {
                    this.fetchData();
                })

            this.newTaskData.name = '';
        },
        delateList(index) { //passo l'indice della lista che bisogna eliminare
            const conferma = confirm('Are you sure you want to delete')

            if (conferma) {
                this.taskList.splice(index, 1);
            }

        },
    },
    mounted() {
        this.fetchData();
    },
}).mount("#app");