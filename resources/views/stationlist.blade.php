    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <h1>SA Service Station Management System</h1>

            <form action="{{ url('/station') }}" method="GET">
                <input type="search" placeholder="Search your nearest Service Station" name="query" />
                <button>Search</button>
            </form>

            <table>
                <thead>
                    <tr>
                        <td>Station Address</td>
                        <td>Phone</td>
                        <td>Email</td>
                    </tr>
                </thead>

                <tbody>

                @isset($stationsArrList)
                    @foreach($stationsArrList as $list)
                            <tr>
                                <td>{{$list['stationname']}}</td>
                                <td>{{$list['phone']}}</td>
                                <td>{{$list['email']}}</td>
                            </tr>
                    @endforeach
                @endisset

                @if((isset($stationArrList)))
                    <tr>
                        <td colspan="3">Please try to search with another query.</td>
                    </tr>
                @endif                
                </tbody>
            </table>
        </div>
    </div>

<style>
h1{
    margin-top:100px;
    text-align:center;
}

form{
    width:70%;
    margin:0px auto;
    display: grid;
    grid-template-columns: auto 150px;

    margin-top:100px;
    margin-bottom: 10px
}

form input{
    height:40px;
    padding: 5px 10px;
    font-size:16px;
}
form button{
    background: #faeafa;
    outline:none;
    border:none;
    margin-left:10px;
    cursor:pointer;
}


table{
    width:70%;
    margin:0px auto;
}
table,tr,td{
    border-collapse:collapse;
    border: 2px solid #000;
    text-align:center;
}
thead{
    background:#000;
    color:#fff;
    font-weight:bold;
}
caption{
    margin-bottom:20px;
    font-weight:bold;
    font-size:24px;
}
</style>
