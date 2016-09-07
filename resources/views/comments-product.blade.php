<div id="comment">
    @foreach($comments as $comment)
        <div class="col-sm-12">
            <ul>
                <li><a href="#"><i class="fa fa-user"></i>{{ $comment->ten_nguoi_dung }}</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>{{ date('h:i a',strtotime($comment->created_at)) }}</a></li>
                <li><a href="#"><i class="fa fa-calendar-o"></i>{{ date('d-m-Y', strtotime($comment->created_at)) }}</a></li>
            </ul>
            <p>{{ $comment->noi_dung }}</p>
        </div>
    @endforeach
</div>
<div class="text-center">
    <ul class="pagination">
        @if($comments->currentPage() != 1)
            <li><a href="{!! $comments->url($comments->currentPage() - 1) !!}">Trước</a></li>
        @endif
        @for($i = 1; $i <= $comments->lastPage(); $i++)
            <li class="{!! $comments->currentPage() == $i ? 'active' : '' !!}"><a href="{!! $comments->url($i) !!}">{{ $i }}</a></li>
        @endfor
        @if($comments->lastPage() != 0)
            @if($comments->currentPage() != $comments->lastPage())
                <li><a href="{!! $comments->url($comments->currentPage() + 1) !!}">Sau</a></li>
            @endif
        @endif
    </ul>
</div>