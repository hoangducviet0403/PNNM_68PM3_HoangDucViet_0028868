<h1>Danh sách lớp học</h1>

<div class="page-header">
    <a class="btn"
       href="/PNNM_68PM3_HoangDucViet_0028868/public/lophoc/create">
        Thêm lớp học
    </a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Mã lớp</th>
        <th>Tên lớp</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach($lophocs as $lop): ?>
    <tr>
        <td><?= $lop['id']; ?></td>
        <td><?= $lop['malop']; ?></td>
        <td><?= $lop['tenlop']; ?></td>

        <td>
            <a href="/PNNM_68PM3_HoangDucViet_0028868/public/lophoc/edit/<?= $lop['id']; ?>">
                Sửa
            </a>

            |

            <a href="/PNNM_68PM3_HoangDucViet_0028868/public/lophoc/delete/<?= $lop['id']; ?>"
               onclick="return confirm('Bạn có chắc muốn xóa lớp học này không?')">
                Xóa
            </a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>