<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center mt-4">Todo list</h1>
            <div class="d-flex justify-content-center my-4 text-white">
                <form @submit.prevent="taskSubmit">
                    <input type="text" placeholder="Scrivi..." v-model="newTaskData.name">
                    <button style="height:45px;" class="btn btn-info ms-4" @click=""><i class="fa-solid fa-plus"></i> Inserisci</button>
                </form>
            </div>
            <div class="d-flex justify-content-center">
                <div class="list-group list-group-flush" style="width: 425px;">
                    <div class="list-group-item d-flex justify-content-between align-items-center" v-for="(task, i) in taskList">
                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" v-model="task.done">
                            <span :class="task.done ? `text-decoration-line-through` : '' "> {{task.name}} </span>
                        </label>
                        <button class="btn btn-danger" @click="delateList(i)">
                            <i class="fa-solid fa-trash-can text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>