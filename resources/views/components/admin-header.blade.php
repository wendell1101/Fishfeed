<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $title }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach($links as $key => $link)
                    <a href="{{$link['link']}}"><li class="breadcrumb-item">{{$link['name']}}</li></a> 
                    @if($key+1 !== count($links))
                    <span class="px-2"> > </span>
                    @endif
                    @endforeach
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>