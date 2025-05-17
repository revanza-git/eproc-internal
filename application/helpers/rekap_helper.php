<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('generate_rekap_html')) {
    function generate_rekap_html($data, $type, $year) {
        $html = '<div class="panel" style="height: 550px">
            <div class="scrollbar" id="custom-scroll" style="height: 538px">
                <div class="container-title">
                    <h3>Data ' . strtoupper($type) . ' ' . $year . '</h3>
                </div>';

        // Generate summary sections based on type
        switch ($type) {
            case 'fppbj':
                $html .= generate_fppbj_summary($data);
                break;
            case 'fkpbj':
                $html .= generate_fkpbj_summary($data);
                break;
            case 'fp3':
                $html .= generate_fp3_summary($data);
                break;
        }

        $html .= '</div></div>';
        return $html;
    }
}

if (!function_exists('generate_fppbj_summary')) {
    function generate_fppbj_summary($data) {
        $html = '';
        
        // FPPBJ Selesai
        $width_selesai = ($data['fppbj_selesai']->num_rows() / $data['total_fppbj_semua']->num_rows()) * 100;
        $html .= generate_summary_section(
            'FPPBJ Selesai',
            $data['fppbj_selesai']->num_rows(),
            $width_selesai,
            'success',
            $data['fppbj_selesai']->result(),
            'pemaketan/division'
        );

        // Belum disetujui User
        $width_pending = ($data['fppbj_pending']->num_rows() / $data['total_perencanaan']) * 100;
        $html .= generate_summary_section(
            'Belum disetujui User',
            $data['fppbj_pending']->num_rows(),
            $width_pending,
            'warning',
            $data['fppbj_pending']->result(),
            'pemaketan/division'
        );

        // Add other sections similarly...

        return $html;
    }
}

if (!function_exists('generate_fkpbj_summary')) {
    function generate_fkpbj_summary($data) {
        $html = '';
        
        // FKPBJ Selesai
        $width_success = ($data['fkpbj_success']->num_rows() / $data['total_fkpbj']->num_rows()) * 100;
        $html .= generate_summary_section(
            'FKPBJ Selesai',
            $data['fkpbj_success']->num_rows(),
            $width_success,
            'success',
            $data['fkpbj_success']->result(),
            'pemaketan/division'
        );

        // Add other sections similarly...

        return $html;
    }
}

if (!function_exists('generate_fp3_summary')) {
    function generate_fp3_summary($data) {
        $html = '';
        
        // FP3 Selesai
        $width_success = ($data['fp3_success']->num_rows() / $data['total_fp3']->num_rows()) * 100;
        $html .= generate_summary_section(
            'FP3 Selesai',
            $data['fp3_success']->num_rows(),
            $width_success,
            'success',
            $data['fp3_success']->result(),
            'fp3/index'
        );

        // Add other sections similarly...

        return $html;
    }
}

if (!function_exists('generate_summary_section')) {
    function generate_summary_section($title, $count, $width, $type, $items, $base_url) {
        $html = '<div class="summary">
            <div class="summary-title">
                ' . $title . '
                <span>' . $count . '</span>
            </div>
            <div class="summary-bars">
                <span class="bar-top is-' . $type . '" style="width:' . $width . '%"></span>
                <span class="bar-bottom"></span>
            </div>
            <button class="accordion-header">' . $title . ' <span class="badge is-' . $type . '">' . $count . '</span><span class="icon"><i class="fas fa-angle-down"></i></span></button>
            <div class="accordion-panel">';

        $no = 1;
        foreach ($items as $item) {
            $html .= '<p>' . $no . '. <a href="' . site_url($base_url . '/' . $item->id_division . '/' . $item->id) . '">' . $item->nama_pengadaan . '</a></p>';
            $no++;
        }

        $html .= '</div></div>';
        return $html;
    }
} 