@if($errors->any())
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;﻿</span>
                </button>
                {{--{{ $errors->first() }}--}}
                <ul>
                    @foreach($errors->all() as $errorTxt)
                        <li>{{ $errorTxt }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;﻿</span>
                </button>
                {{ session()->get('success') }}

{{--                @if (session('restore'))--}}
{{--                    <form method="GET" action="{{ route('blog.admin.posts.restore', session()->get('restore')) }}">--}}
{{--                        @csrf--}}
{{--                        <button type="submit" class="btn btn-link">Восстановить</button>--}}
{{--                    </form>--}}

{{--                    --}}{{--<a href="{{route('blog.admin.posts.restore', session()->get('restore'))}}" type="submit"--}}
{{--                       class="btn btn-link">Восстановить</a>--}}
{{--                @endif--}}
            </div>
        </div>
    </div>
@endif
