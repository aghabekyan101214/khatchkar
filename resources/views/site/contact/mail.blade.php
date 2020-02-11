<div class="container">
    <div class="row">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Name</td>
                <td>{{ $name ?? "No Name" }}</td>
            </tr>
            <tr>
                <td>Email</td>
                {{ $email ?? "No Email" }}
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ $phone ?? "No Phone" }}</td>
            </tr>
            <tr>
                <td>Message</td>
                <td>{{ $msg ?? "No Message" }}</td>
            </tr>
        </table>
    </div>
</div>
