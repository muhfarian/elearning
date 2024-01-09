<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Class menu aplikasi e-learning dokumenary.net
 *
 * @author Almazari <almazary@gmail.com>
 * @since  1.8
 */
class Menu
{
    private $menus = array();

    function __construct()
    {
        $this->default_menu();
    }

    private function default_menu()
    {
        $this->menus['admin'] = array(
            0 => array(
                '<a href="' . site_url() . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-home" style="color:#1E1E1E"></i>Beranda</a>'
            ),
            1 => array(
                '<a href="' . site_url('siswa'). '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-group" style="color:#1E1E1E"></i>Siswa <span class="menu-count-pending-siswa"></span></a>',
                '<a href="' . site_url('pengajar'). '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-user" style="color:#1E1E1E"></i>Pengajar <span class="menu-count-pending-pengajar"></span></a>'
            ),
            
            2 => array(
                '<a href="' . site_url('kelas/mapel_kelas') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-paste" style="color:#1E1E1E"></i>Matapelajaran Kelas </a>',
                '<a href="' . site_url('kelas') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-tasks" style="color:#1E1E1E"></i>Manajemen Kelas </a>',
                '<a href="' . site_url('mapel') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-book" style="color:#1E1E1E"></i>Manajemen Matapelajaran </a>'
            ),
            3 => array(
                '<a href="' . site_url('welcome/pengaturan') . '" style="background-color:white;color:#1E1E1E" ><i class="menu-icon icon-wrench" style="color:#1E1E1E"></i>Pengaturan</a>',
            ),
            4 => array(
                '<a href="' . site_url('login/logout') . '" style="background-color:white;color:red"><i class="menu-icon icon-signout" style="color:red"></i>Logout </a>'
            )
        );

        $this->menus['pengajar'] = array(
            0 => array(
                '<a href="' . site_url() . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-home" style="color:#1E1E1E"></i>Beranda</a>',
                '<a href="' . site_url('pengajar/jadwal') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-tasks" style="color:#1E1E1E"></i>Jadwal Mengajar </a>'
            ),
            1 => array(
                '<a href="' . site_url('tugas?clear_filter=true') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-tasks" style="color:#1E1E1E"></i>Tugas </a>',
                '<a href="' . site_url('materi?clear_filter=true') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-book" style="color:#1E1E1E"></i>Materi </a>'
            ),
            2 => array(
                '<a href="' . site_url('login/logout') . '" style="background-color:white;color:red"><i class="menu-icon icon-signout" style="color:red"></i>Logout </a>'
            )
        );

        $this->menus['siswa'] = array(
            0 => array(
                '<a href="' . site_url() . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-home" style="color:#1E1E1E"></i>Beranda</a>',
                '<a href="' . site_url('siswa/jadwal_mapel') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-tasks" style="color:#1E1E1E"></i>Jadwal Matapelajaran</a>'
            ),
            1 => array(
                '<a href="' . site_url('tugas?clear_filter=true') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-tasks" style="color:#1E1E1E"></i>Tugas </a>',
                '<a href="' . site_url('materi?clear_filter=true') . '" style="background-color:white;color:#1E1E1E"><i class="menu-icon icon-book" style="color:#1E1E1E"></i>Materi </a>'
            ),
            2 => array(
                '<a href="' . site_url('login/logout') . '" style="background-color:white;color:red"><i class="menu-icon icon-signout" style="color:red"></i>Logout </a>'
                )
        );
    }

    public function add($rule, $index, $link)
    {
        $this->menus[$rule][$index][] = $link;
    }

    public function get()
    {
        if (is_admin()) {
            return $this->menus['admin'];
        } elseif (is_pengajar()) {
            return $this->menus['pengajar'];
        } elseif (is_siswa()) {
            return $this->menus['siswa'];
        }
    }

}

