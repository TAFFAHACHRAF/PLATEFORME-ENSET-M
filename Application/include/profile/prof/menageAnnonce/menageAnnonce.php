<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap drp-lst">
                    <h4 style="font-weight:bolder;color:#B73448;font-size:19px">Gérer les annonces </h4>
                    <div class="add-product">
                        <a href="index.php?ajouter_annonce=<?= $data['ID_EMPLOYEE'] ?>">Ajouter une annonce </a>
                    </div>
                    <div class="asset-inner">
                        <table>
                            <tr style="background-color: #F6F9FC" >
                                <th >ID</th>
                                <th>TITRE </th>
                                <th>AUDITION </th>
                                <th>DATE </th>
                                <th>ACTION</th>
                            </tr>
                            <t>
                            <?php 
                                        $r="select * from annonce where ID_EMPLOYEE='".$_SESSION['idemp']."'";
                                        $res=$conex->query($r);
                                        if($res){
                                            while($d=$res->fetch_assoc()){
                                                ?>
                                                <tr>
                                                    <td><?=$d['ID_ANNONCE']?></td>
                                                    <td><?=stripslashes($d['TITRE'])?></td>
                                                    <td><?=$d['AUDITION']?></td>
                                                    <td><?=$d['DATE_PUB']?></td>
                                                    
                                                    <td>
                                                        <a href="../prof/index.php?detail_an=<?=$d['ID_ANNONCE']?>"><button data-toggle="tooltip" title="view" class="pd-setting-ed"><i style="color:blue" class="fa fa-eye" aria-hidden="true"></i></button></a>
                                                    
                                                        <a href="../prof/index.php?upadate_ann=<?=$d['ID_ANNONCE']?>"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i style="color:green" class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                                    
                                                        <a href="menageAnnonce/deleteAnnonce.php?id=<?=$d['ID_ANNONCE']?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i style="color:red" class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        ?>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
