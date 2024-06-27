<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>Game</td>
                <td>Orders</td>
                <td>Price</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
        <a href="/orderarray/new">Add new product</a>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['game'] ?></td>
                <td><?= $item['orders'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['status'] ?></td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>