<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Mechanic') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <table>
                <caption>Staff of {{Auth::user()->stationname}}</caption>
                <thead>
                    <tr>
                        <td>Staff id</td>
                        <td>Name</td>
                        <td>Address</td>
                        <td>Cnic</td>
                        <td>Phone</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($mechanicArr as $mechanic)
                        @if($mechanic['stationid'] == SID(Auth::user()->id))
                            <tr>
                                <td>ST{{$mechanic['id']}}</td>
                                <td>{{$mechanic['name']}}</td>
                                <td>{{$mechanic['address']}}</td>
                                <td>{{$mechanic['cnic']}}</td>
                                <td>{{$mechanic['phone']}}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

<style>
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
