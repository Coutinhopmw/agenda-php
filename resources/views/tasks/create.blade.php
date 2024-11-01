<x-layout page="Agenda:Login">

    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="task_section">
        <h1>Cria tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input name='title' label='Titulo da task' placeholder='Digite o título da sua Task' type="text"/>

            <x-form.text_input name='due_date' label='Data de realiação' type="datetime-local" />

            <x-form.select_input name='category_id' label='Categoria'>  
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </x-form.select_input>
            
            <x-form.textarea_input name='description' label='Descrição da tarefa' placeholder='Digite a descrição da sua tarefa'/>

            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>

        </form>
    </section>
    
</x-layout>
    