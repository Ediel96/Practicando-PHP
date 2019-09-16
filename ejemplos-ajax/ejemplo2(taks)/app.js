$(document).ready(function(){
    $('#task-result').hide();
    fetchTasks();
    console.log("Ya funciona con query");
     $('#search').keyup(function(e){
        if($('#search').val()){
            let search = $('#search').val();
            $.ajax({
                url:'task-search.php',
                type: 'POST',
                data:{search},
                success: function(response){
                    let tasks = JSON.parse(response);
                    let template = '';
                    tasks.forEach(task =>{
                        template += `
                        <li><a href="#" class="task-item">${task.name}</a></li>
                        `
                        $('#task-result').show();
                        $('#container').html(template);
                    })
                }
            });
        }
    });

    $('#task-form').submit(function(e){
        fetchTasks();
        const postData = {
            name: $('#name').val(),
            description:$('#description').val(),
        }
        $.post('task-add.php', postData, function(response){
            console.log(response); 
            $('#form-form').trigger('reset');
        })
        e.preventDefault();
    })


    function fetchTasks (){
        $.ajax({
            url:'task-list.php',
            type:'GET',
            success: function(response){
                console.log(response);
                let tasks = JSON.parse(response);
                let template = '';
                tasks.forEach(task =>{
                    template += `
                        <tr>
                            <td>${task.id}</td>
                            <td>${task.name}</td>
                            <td>${task.description}</td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    `
                })
                $('#tasks').html(template);
            }
        })
    }
    
});