<table id="sample-table" class="table table-hover table-bordered tablesorter">
   <thead>
        <tr>
            <th style="width:20%">Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($actions as $action)
        <tr>
            <td>{{$action->created_at}}</td>
            <td>{{$action->message}}</td>
        </tr>
        @endforeach
    </tbody>
</table>