<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * �������������������ĸ�����д�����еĿ���������̳���CI_Controller��
 */
class Calculate extends CI_Controller {
	
        // ���췽��
        function __construct() {
                parent::__construct();
				// ���ؼ���ģ��  		
                $this->load->model('calculate_model');
        }
        
        // Ĭ�Ϸ���
        function index() {
                // ����calculate_view��ͼ
                $this->load->view('calculate_view');
        }
		
		function count() {
        // ʹ����������ղ���
        $num1 = $this->input->post('num1');
        $op = $this->input->post('operate');
        $num2 = $this->input->post('num2');
        
        if (is_numeric($num1) && is_numeric($num2)) {
                // ��������������Ϊ���֣������calculate_modelģ���µ�count����
                $result = $this->calculate_model->count($num1, $num2, $op);
                // ����Ҫ������ͼ������
                $data = array('num1' => $num1, 'num2' => $num2, 'op' => $op, 'result' => $result);
                // ������ͼ
                $this->load->view('result_view', $data);
        }
}
        /*
		function count() {
        // ʹ����������ղ���
        $num1 = $this->input->post('num1');
        $op = $this->input->post('operate');
        $num2 = $this->input->post('num2');
        
        if (is_numeric($num1) && is_numeric($num2)) {
                // ��������������Ϊ���֣������calculate_modelģ���µ�count����
                $result = $this->calculate_model->count($num1, $num2, $op);
        }
		*/
}

/* End of file calculate.php */
/* Location: ./application/controllers/calculate.php */

