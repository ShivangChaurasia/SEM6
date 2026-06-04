<div>
    <!-- Well begun is half done. - Aristotle -->


    <table border="1">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>email</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->gender}}</td>
                <td>{{$student->email}}</td>
            </tr>
        @endforeach
    </table>
</div>
