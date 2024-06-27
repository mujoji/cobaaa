<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/orderarray" method="post">
        <label for="name">Name</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />
        
        <br />
        <br />
        <label for="stock">Game</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />

        <br />
        <br />
        <label for="stock">Orders</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />

        <br /> 
        <br />
        <label for="price">Price</label>
        <br />
        <input type="number" min="0" id="price" placeholder="Input product price" name="price" />

        <br />
        <br />
        <label for="category">Status</label>
        <br />
        <input type="text" id="name" placeholder="Input product name" name="name" />
        

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>