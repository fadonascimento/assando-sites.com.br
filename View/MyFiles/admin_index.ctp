<?php
$this->set('subtitle_for_layout', '&ndash; ' . $this->Paginator->counter(array('format' => '%count%')) . ' arquivos');

$this->Bootstrap->addCrumb('Arquivos');
?>

<?php if (!empty($data)) { ?>
<table class="zebra-striped">
<thead>
	<tr>
		<th>#</th>
		<th>Título</th>
		<th>Descrição</th>
		<th colspan="2">Turma</th>
		<th>Data</th>
	</tr>
</thead>
<tbody>
	<?php
	foreach ($data AS $row):
		extract($row);
	?>
	<tr>
		<td><?php echo $MyFile['id'] ?></td>
		<td><?php echo $this->Html->link($MyFile['title'], array('action' => 'edit', $MyFile['id'])) ?></td>
		<td><?php echo $this->Text->truncate($MyFile['description'], 30) ?></td>
		<td><?php echo $MyClass['shortname'] ?></td>
		<td><?php echo $MyClass['code'] ?></td>
		<td class="center"><?php echo $this->Time->format('d/m ~ H:i', $MyFile['created']) ?></td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>

<?php echo $this->element('admin/pagination') ?>

<?php } else echo $this->element('admin/alerts/inline', array('class' => 'warning', 'message' => 'Nenhum arquivo encontrado')) ?>