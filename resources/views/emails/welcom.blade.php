<table>
   
        @if(isset($name))
            <tr>
                <td>Имя:</td>
                <td>{{$name}}</td>
            </tr>
        @endif
    
        @if(isset($email))
            <tr>
                <td>Email:</td>
                <td>{{$email}}</td>
            </tr>
        @endif
        @if(isset($author))
            <tr>
                <td>Автор:</td>
                <td>{{$author}}</td>
            </tr>
        @endif
        @if(isset($book))
        <tr>
            <td>Название книги:</td>
            <td>{{$book->name}}</td>
        </tr>
    @endif
    
    
    </table>
    
    