<table>
    <tr>
        <th>Nume</th>
        <th>Culoare</th>
        <th>Marime</th>
        <th>Pret</th>
    </tr>
<?php foreach($flori as $var){?>
     <tr>
         <td><?php echo $var['nume'];?></td>
         <td><?php echo $var['culoare'];?> </td>
         <td><?php echo $var['marime'];?> </td>
         <td><?php echo $var['pret'];?> </td> 
</tr>
<?php }?>
</table>