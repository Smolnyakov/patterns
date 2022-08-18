<h2>Ваша корзина</h2>

<?php foreach ($cart as $item):?>
    <div id="<?=$item['cart_id']?>">
        <h3><?=$item['product_name']?></h3>
        <p>price: <?=$item['price']?></p>
        <button data-id="<?= $item['cart_id'] ?>" class="delete">Удалить</button>
    </div>
<?php endforeach;?>

<script>
    let buttons = document.querySelectorAll('.delete');
    buttons.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (
                async () => {
                    const response = await fetch('/cart/delete/?id=' + id);
                    const answer = await response.json();
                    document.getElementById('count').innerText = answer.count;
                    document.getElementById(id).remove();
                }
            )();
        })
    })
</script>