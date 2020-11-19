<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\ORM\TableRegistry;
/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReportesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        
    }

 //--- tabla con html y pdf-------------
 public function listado()
    {
        require  ROOT . DS . 'vendor' . DS . 'tcpdf'. DS .'Pdf.php';
        
        $pdf= new \Pdf();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('unismon');
        $pdf->SetTitle('Informe de prueba');
        $pdf->SetSubject('Informe general');
        $pdf->SetKeywords('PDF, reportes');
        $pdf->SetMargins(10, 25.2, 10);
        $pdf->SetAutoPageBreak(TRUE, 13.4);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // add a page
        $pdf->AddPage('P', 'LETTER');
        $pdf->SetFont('times', '', 12, '', true);
              
        $regtabla =  TableRegistry::getTableLocator()->get('Clientes')->find()->toArray();//select * from clientes
        $html='
         <table cellspacing="0" cellpadding="1" border="1">
         <tr>
          <th> Nombres </th>
          <th> Telefono </th>
          <th> Correo </th>
         </tr>
         ';
        
        foreach($regtabla  as $reg)
        {
           $html.='
           <tr>
             <td> '.$reg->nombres.' '.$reg->apellidos.'</td>
             <td> '.$reg->telefono.'</td>
             <td> '.$reg->correo.'</td>
            </tr>'; 
        }
       $html.='</table>';
       $pdf->writeHTML($html, true, false, true, false, '');
       $pdf->lastPage();
       $pdf->Output('Listado_clientes.pdf', 'I');
 }

    
}
