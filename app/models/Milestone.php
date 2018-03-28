<?php

class Milestone 
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTasks()
    {
        $this->db->query("SELECT * FROM wp_3_project_tasks LIMIT 20 ");

        return $this->db->resultSet();
    }


    public function getMilestones($id)
    {
        
        $this->db->query("SELECT 
        wp_3_projects.id, 
        wp_3_projects.url, 
        wp_3_project_milestones.project_id,
        wp_3_project_milestones.title
    FROM 
        wp_3_projects,
        wp_3_project_milestones
    WHERE
        wp_3_projects.id = wp_3_project_milestones.project_id
    AND
        wp_3_projects.id = $id
    
    ");
    return $this->db->resultSet();
    }
}