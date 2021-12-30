<div class="row">
        @foreach($todos as $tudo)
        
        <div class="col-sm-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5 class="card-title"><p><b>Id:</b> </p>{{ $tudo->id }}</h5>
                    <h5 class="card-title"><p><b>Nome:</b> </p>{{ $tudo->name }}</h5>
                </div>
            </div>
        </div>
        @endforeach
</div>