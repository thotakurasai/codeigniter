<?php 
class Articles_Model extends CI_Model{
    public function articles_list(){
        $user_id = $this->session->userdata('user_id');
        $query = $this->db
                            ->select('title')
                            ->select('id')
                            ->from('articles')
                            ->where('user_id',$user_id)
                            ->get();
        return $query->result();
    }
    public function add_article($array)
    {
        
        return $this->db->insert('articles',$array);

    }
    public function find_article($article_id)
    {
        $q = $this->db->select(['id','title','body'])
                        ->where('id',$article_id)
                        ->get('articles');
        return $q->row();
    }

    public function update_article($article_id, Array $article)
    {   

        $a = $article['title'];
        $b = $article['body'];
        return $this->db->where('id',$article_id)
                        ->set(['id'=>'$article_id','title'=>'$a','body'=>'$b']);
    }
    public function delete_article($article_id)
    {
        return $this->db->delete('articles',['id'=>$article_id]);
    }
} 