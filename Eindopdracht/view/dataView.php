<div ng-app='app' ng-controller='dataController'>

    <table class="table">
        <tr>
            <th ng-click="('Voornaam')">Voornaam</th>
            <th ng-click="('Achternaam')">Achternaam</th>
            <th ng-click="('Telefoonnummer')">Telefoonnummer</th>
            <th ng-click="('Straat')">Straat</th>
            <th ng-click="('Huisnummer')">Huisnummer</th>
            <th ng-click="('Postcode')">Postcode</th>
            <th ng-click="('Woonplaats')">Woonplaats</th>
            <th ng-click="('TijdToegevoegd')">TijdToegevoegd</th>
            <th ng-click="('id')">#</th>
        </tr>
        <tr ng-repeat="p in persoonsData">
            <td>{{ p.Voornaam }}</td>
            <td>{{ p.Achternaam }}</td>
            <td>{{ p.Telefoonnummer }}</td>
            <td>{{ p.Straat }}</td>
            <td>{{ p.Huisnummer }}</td>
            <td>{{ p.Postcode }}</td>
            <td>{{ p.Woonplaats }}</td>
            <td>{{ p.TijdToegevoegd }}</td>
            <td>{{ p.id }}</td>
            <td><a class="btn btn-danger" href="delete.php?did={{p.id}}">Delete</a></td>
            <td><a class="btn btn-info" href="update.php?did={{p.id}}">Update</a></td>
        </tr>
    </table>
</div>
