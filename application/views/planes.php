
<div id="body">

    <h3>{airid} - {role}</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <!-- table headers -->
                <td><b>Plane Id</b></td>
                <td><b>Manufacturer</b></td>
                <td><b>Model</b></td>
                <td><b>Seats</b></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- table content taken from FleetInfo model -->
                <td data-toggle="tooltip" data-placement="top" title="{port1} - {port2}">{id}</td>
                <td>{manufacturer}</td>
                <td>{model}</td>
                <td>{seats}</td>
            </tr>

        </tbody>
    </table>
    <div runat="server" id="addPlane">
        <a href="add">Add Item</a>
    </div>


</div>