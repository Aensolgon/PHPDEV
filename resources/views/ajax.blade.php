<div class="d-flex flex-row justify-content-between py-3">

        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col" class="main">#</th>
                    <th scope="col" class="main">ФИО</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($authors as $item)
                  <tr>
                  <th class="numbers">{{$loop->index+1}}</th>
                    <td class="col myproperty">{{$item->name_author}}</td>
                    <td class="col myproperty"><img src="{{$item->image}}"></td>
                    <td class="col myproperty"><a href="{{route('books',['id' => $item->id])}}" class="btn btn-primary">Перейти</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>             
</div>
<div class="d-flex justify-content-center py-3">
    {{$authors->links()}}
</div>