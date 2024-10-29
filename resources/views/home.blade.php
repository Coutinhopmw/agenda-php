<x-layout>

    <x-slot:btn>
        <a href="#" class="btn btn-primary">
            Criar tarefa
        </a>
    </x-slot:btn>


    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="linha_header-line"></div>
            <div class="graph_header-date">
                <img src="/assets/images/icon-prev.png" alt="" srcset="">
                    29/10/2024
                <img src="/assets/images/icon-next.png" alt="" srcset="">
            </div>
        </div>
        <div class="graph_header-subtittle">
            Tarefas: <b>3/8</b>
        </div>
        <div class="graph-placeholder">
        
        </div>
        <div class="tasks_left_footer">
            <img src="/assets/images/icon-info.png" alt="" srcset=""> Restam 3 tarefas para serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select name="" id="" class="list_header-select">
                <option value="1">Todas as Tarefas</option>
            </select>
            <div class="task_list">
                @php
                    $tasks = [
                        ['Done'=> false, 'title' => 'Minha primeira Task', 'category' => 'categoria1'],
                        ['Done'=> true, 'title' => 'Minha segunda Task', 'category' => 'categoria2'],
                        ['Done'=> false, 'title' => 'Minha terceria Task', 'category' => 'categoria3'],
                    ]
                @endphp
                <x-task :data=$tasks[0]/>
            </div>
        </div>
    </section>
</x-layout>