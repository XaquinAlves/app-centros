<?php

declare(strict_types=1);

?>
<div class="row">
    <div class="col-12">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Centro</th>
                <th>Concello</th>
                <th>Código</th>
                <th>Ciclos</th>
                <th>Opcións</th>
            </tr>
            <tr>
                <form action="" method="get">
                <td>
                    <input type="text" class="form-control" name="centro" id="centro" placeholder="Search Centro"/>
                </td>
                <td>
                    <input type="text" class="form-control" name="concello" id="concello"
                           placeholder="Search Concello"/>
                </td>
                <td>
                    <input type="text" class="form-control" name="codigo" id="codigo"
                           placeholder="Search Código"/>
                </td>
                <td>
                    <input type="text" class="form-control" name="ciclos" id="ciclos"
                           placeholder="Search Ciclo"/>
                </td>
                <td>
                    <button type="reset">Reset</button>
                </td>
                </form>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
