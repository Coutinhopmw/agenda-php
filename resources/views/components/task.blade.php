<div class="task">
    <div class="title">
        <input type="text" class="checkbox"
            @if ( $data && $data['done'])
                checked
            @endif
        />
        <div class="task_title">{{$data['title'] ?? '' }}</div>
    </div>
    <div class="priority">
        <div class="sphere">
            <h6>{{$data['category'] ?? '' }}</h6>
        </div>
    </div>
    <div class="actions">
        <a href="#">
            <img src="/assets/images/icon-edit.png" alt="">
        </a>
        <a href="#">
            <img src="/assets/images/icon-delete.png" alt="">
        </a>
    </div>
</div>