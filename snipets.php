<!--OUTRA MANEIRA DE APRESENTAR AS AÇÕES NO DATA-TABLE-->
<button type="button" class="btn btn-primary btn-sm">
    <a href="editar.php?id=<?php echo $row['id'] ?>" class="text-light">
        <i class="fa-solid fa-pen-to-square fs-5 me-3"></i>
        Editar
    </a>
</button>
<button type="button" class="btn btn-danger btn-sm">
    <a href="delete.php?deleteid='.$id.'" class="text-light">
        <i class="fa-solid fa-trash fs-5 me-3 text-light"></i>
        Excluir
    </a>
</button>