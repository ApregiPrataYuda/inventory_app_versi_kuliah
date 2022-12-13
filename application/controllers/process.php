$post =  $this->input->post(null,  TRUE);
		   if (isset($_POST['add'])) {
			     $this->Category_m->add($post);
		   }else if (isset($_POST['edit'])) {
			      $this->Category_m->edit($post);
		   }if ( $this->db->affected_rows() > 0 ) {
			      $this->session->set_flashdata('pesan','data berhasil di simpan!');
		   }
		    redirect('Category');