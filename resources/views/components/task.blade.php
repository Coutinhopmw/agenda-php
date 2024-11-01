<div class="task">
    <div class="title">
        <input type="checkbox" class="checkbox"
            @if ($data && $data['is_done'])
                checked
            @endif
        />
        <div class="task_title">{{$data['title'] ?? '' }}</div>
    </div>
    <div class="priority">
        <div class="sphere">
            <h6>{{$data['category']->title ?? '' }}</h6>
        </div>
    </div>
    <div class="actions">
        <a href="{{route('task.edit',['id' => $data['id']])}}">
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="{{route('task.delete',['id' => $data['id']])}}">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>
