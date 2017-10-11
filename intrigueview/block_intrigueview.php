<?php 
class block_intrigueview extends block_base {
  
  
  public function init() {
    $this->title = get_string('intrigueview', 'block_intrigueview');
  }

  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }
    
    $this->content = new stdClass;
    $this->content->text = 'The content of the block!';
    $this->content->footer = 'This is the foot!';
  }
}

 ?>