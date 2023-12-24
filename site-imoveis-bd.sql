-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Dez-2023 às 17:06
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_home`
--

CREATE TABLE `ads_home` (
  `id` int(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_home_topo`
--

CREATE TABLE `ads_home_topo` (
  `id` int(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ads_home_topo`
--

INSERT INTO `ads_home_topo` (`id`, `link`, `foto`) VALUES
(3, 'https://www.marcioleiteweb.com.br/', '1621777848.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_interna`
--

CREATE TABLE `ads_interna` (
  `id` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ads_interna`
--

INSERT INTO `ads_interna` (`id`, `foto`, `link`) VALUES
(3, '1651380545.jpg', 'http://mlbn.com.br/'),
(4, '1651380564.jpg', 'http://mlbn.com.br/'),
(5, '1651380574.jpg', 'http://mlbn.com.br/'),
(6, '1651380597.jpg', 'http://mlbn.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexos`
--

CREATE TABLE `anexos` (
  `id` int(100) NOT NULL,
  `id_tarefa` varchar(200) NOT NULL,
  `arquivo` varchar(250) NOT NULL,
  `nome_anexo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `anexos`
--

INSERT INTO `anexos` (`id`, `id_tarefa`, `arquivo`, `nome_anexo`) VALUES
(6, '7', '1671817953.jpeg', 'anexo1'),
(7, '7', '1671817969.png', 'anexo2'),
(9, '8', '1675963069.pdf', 'modelo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `apos_banner`
--

CREATE TABLE `apos_banner` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `apos_banner`
--

INSERT INTO `apos_banner` (`id`, `nome`) VALUES
(1, 'O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo. Mesmo não atingindo o alvo, quem busca e vence obstáculos, no mínimo fará coisas admiráveis.'),
(4, 'Rapidez'),
(5, 'Melhor Atendimento'),
(6, 'Melhores Produtos'),
(7, 'Qualidade Sempre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `audios`
--

CREATE TABLE `audios` (
  `id` int(100) NOT NULL,
  `nome_audio` varchar(250) NOT NULL,
  `descricao_audio` text NOT NULL,
  `link_audio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_home`
--

CREATE TABLE `banner_home` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `banner_home`
--

INSERT INTO `banner_home` (`id`, `titulo`, `texto`, `foto`, `logo`, `link`) VALUES
(3, 'Trabalhos tipo 21111a', '  sdgdfgthrthtyr2222a', '1676593940.jpg', '1676593940b.jpg', 'http://mlbn.com.br/aaaaa'),
(4, 'Termos de Uso', 'sdcfdfdfv', '1676594710.jpg', '1676594710b.jpg', 'http://mlbn.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_estados`
--

CREATE TABLE `blog_estados` (
  `id` int(100) NOT NULL,
  `id_estados` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `blog_album` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_produtos`
--

CREATE TABLE `categorias_produtos` (
  `id` int(100) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `sobre` text NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_mostra` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias_produtos`
--

INSERT INTO `categorias_produtos` (`id`, `nome`, `sobre`, `celular`, `email`, `senha`, `senha_mostra`, `facebook`, `instagram`, `foto`, `created`, `modified`) VALUES
(11, 'Barbara Naia', '<p>A melhor do mundo</p>', '(11) 94823-1840', 'babis@cliente.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'https://www.facebook.com/mlbndesign', 'https://www.instagram.com/marcio_leite_web/', '1692369086.jpg', '2023-07-25 20:47:34', '2023-08-18 11:31:26'),
(12, 'Lidia Medeiros', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nulla neque, et pellentesque ex gravida in. Nulla vestibulum velit ante, ac consequat orci laoreet sit amet. Sed venenatis rutrum tellus, vitae malesuada nisi blandit sit amet. Fusce nec purus id lacus viverra efficitur. Mauris non nisi quis lorem mattis semper in quis neque. Pellentesque ex eros, faucibus non malesuada eget, imperdiet sit amet lorem. Aenean dapibus elit et eros rutrum, in molestie urna vestibulum. Cras sit amet leo nisl. Morbi eget eros turpis. In lacinia, arcu posuere bibendum pellentesque, erat velit pharetra metus, vitae scelerisque sapien lectus quis mauris.</p>', '(11) 94823-1840', 'lidia@mlbn.com', 'd41d8cd98f00b204e9800998ecf8427e', '', 'https://www.facebook.com/mlbndesign', 'https://www.instagram.com/marcio_leite_web/', '1692369023.jpg', '2023-08-09 19:51:28', '2023-08-18 11:30:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificados`
--

CREATE TABLE `classificados` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `classificado_album` varchar(250) NOT NULL,
  `contato_bt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `classificados`
--

INSERT INTO `classificados` (`id`, `titulo`, `texto`, `foto_principal`, `classificado_album`, `contato_bt`) VALUES
(1, 'artigo', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla odio ac ante volutpat lobortis. Cras dignissim orci at justo vehicula, nec auctor elit ullamcorper. Praesent mattis, diam ac posuere ullamcorper, risus nibh tempor mauris, in vestibulum lectus erat nec elit. Sed faucibus ante vel diam ultricies, vel vehicula eros laoreet. Proin venenatis quis urna sit amet vehicula. Etiam semper dapibus magna nec elementum. Cras convallis lorem eu euismod porttitor. Curabitur porttitor euismod scelerisque. Sed varius pretium nisi, sed consectetur tellus pulvinar sit amet. Vestibulum aliquet sapien in nisi aliquam, quis tempor lacus dapibus.</p>\r\n<p>Mauris finibus elementum faucibus. Aliquam pharetra efficitur lorem non pellentesque. Sed lobortis efficitur velit, eu suscipit arcu tincidunt vitae. Praesent venenatis consequat accumsan. Etiam tempor in leo ut tempor. Duis in vehicula lorem, eget eleifend dui. Ut ullamcorper metus vel dui finibus, eu ultricies erat consectetur. Maecenas pharetra nibh non quam euismod, id hendrerit ante convallis. Cras iaculis sem rutrum urna convallis malesuada. Mauris et scelerisque massa. Maecenas posuere mollis leo, sit amet posuere dui condimentum id. Fusce tincidunt semper arcu ac ultricies.</p>\r\n<p>Suspendisse malesuada volutpat metus sed elementum. In et varius velit. Curabitur ornare justo non est tincidunt dignissim. Morbi accumsan finibus diam. Etiam fringilla purus in aliquam elementum. Nulla cursus scelerisque dignissim. Suspendisse potenti. Aenean maximus tortor ante, quis efficitur dui finibus id. Donec molestie nisi lectus, ac vulputate turpis volutpat vitae. In viverra iaculis viverra. Sed sit amet accumsan metus. Morbi tellus metus, congue sed ante sed, cursus euismod mi. Cras pretium cursus odio, ut laoreet nisl mollis et. Sed et accumsan mauris. In hendrerit quis velit id facilisis.</p>', '1686960921.jpg', '1686960921', 'sdvfvfevv'),
(2, 'noticia 2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tellus lacus, pretium nec tortor id, vehicula malesuada dui. Phasellus lobortis nisl ac neque sodales, at accumsan erat vulputate. Nunc aliquet arcu a imperdiet tristique. Donec eu venenatis massa, id vestibulum ante. In fringilla suscipit urna, vitae convallis lorem. Curabitur feugiat eros at risus consectetur, eu accumsan augue consequat. Sed vitae dictum sem. Proin scelerisque, enim sed vestibulum dictum, ante dolor porta tellus, sed bibendum ante sem in purus. Phasellus scelerisque quam vitae tempor luctus.</p>\r\n<p>Donec sollicitudin urna orci, non molestie sapien bibendum vel. Phasellus consequat ex felis, ac interdum ex pharetra in. Maecenas tempus posuere orci, eu hendrerit risus fermentum vel. Duis vulputate ex at pulvinar eleifend. Aliquam eu orci lectus. Fusce congue turpis a volutpat ullamcorper. Vestibulum pharetra quis orci dignissim fringilla. Phasellus at rutrum turpis, eu pharetra orci. Vivamus tempor, libero nec placerat rhoncus, metus turpis bibendum tortor, molestie dapibus massa orci eu turpis.</p>\r\n<p>Sed pharetra aliquet convallis. Ut bibendum nec odio vitae dignissim. Quisque odio turpis, convallis in tellus varius, varius pretium nisl. Maecenas sed odio quam. Cras quis sapien at felis pretium commodo sit amet vel dui. Nullam lobortis, mi sit amet lacinia ultrices, erat enim porta eros, in aliquam libero orci vel ante. Phasellus vestibulum diam quam. Mauris massa dolor, interdum venenatis lacus quis, dictum semper orci.</p>', '1687313040.jpg', '1687313040', 'Planejados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `senha_real` varchar(250) NOT NULL,
  `whatsapp` varchar(250) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `id_advogado` int(100) NOT NULL,
  `situacoe_id` int(100) NOT NULL,
  `niveis_acesso_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `senha_real`, `whatsapp`, `cpf`, `descricao`, `id_advogado`, `situacoe_id`, `niveis_acesso_id`) VALUES
(15, 'Marcio Leite', 'marcio@marcio.com', 'f09696910bdd874a99cd74c8f05b5c44', '1313', '11948231840', 'xxxxxxxxxxxxxxxxxxxxxxx', 'cliente de teste', 6, 1, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_vip`
--

CREATE TABLE `cliente_vip` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente_vip`
--

INSERT INTO `cliente_vip` (`id`, `titulo`, `texto`, `foto_principal`) VALUES
(1, 'CLIENTE VIP', '<p class=\"fst-italic\">Cadastre-se e seja um cliente VIP, para poder desfrutar de diversos benef&iacute;cios:</p>\r\n<ul>\r\n<li><strong>Pagamento faturado &ndash;</strong>&nbsp;pe&ccedil;a seus servi&ccedil;os e pague somente no pr&oacute;ximo m&ecirc;s. Seus pedidos s&atilde;o agrupados e faturados para pagamento via boleto banc&aacute;rio;</li>\r\n<li><strong>Servi&ccedil;os de coleta e entrega de trabalhos &ndash;</strong>&nbsp;suas demandas s&atilde;o retidas e entregues conforme sua necessidade, nos locais indicados e dentro dos prazos combinados, com qualidade sem preocupa&ccedil;&atilde;o;</li>\r\n<li><strong>Programa&ccedil;&atilde;o de pedidos &ndash;</strong>&nbsp;suas demandas podem ser agendadas para confec&ccedil;&atilde;o nos prazos que voc&ecirc; necessitar;</li>\r\n<li><strong>Atendimento com hora marcada &ndash;</strong>&nbsp;sua visita &eacute; sempre importante para n&oacute;s. Estamos &agrave; disposi&ccedil;&atilde;o para receb&ecirc;-los e auxili&aacute;-los na solu&ccedil;&atilde;o de seus problemas;</li>\r\n<li><strong>Espa&ccedil;o para Reuni&otilde;es &ndash;</strong>&nbsp;utilize nosso espa&ccedil;o para se reunir com seus parceiros, clientes e equipe. Nosso espa&ccedil;o &eacute; reservado e possui a infraestrutura necess&aacute;ria para realiza&ccedil;&atilde;o de suas reuni&otilde;es de trabalho e neg&oacute;cios;</li>\r\n<li><strong>Descontos especiais &ndash;</strong>&nbsp;al&eacute;m de usufruir de todos os benef&iacute;cios que oferecemos, voc&ecirc; ainda poder&aacute; ter desconto nos servi&ccedil;os demandados.</li>\r\n</ul>\r\n<p class=\"fst-italic\">Seja nosso Cliente VIP e usufrua de todas as facilidades.</p>', '1677187946.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos_final`
--

CREATE TABLE `contatos_final` (
  `id` int(100) NOT NULL,
  `local` varchar(250) NOT NULL,
  `emails` varchar(250) NOT NULL,
  `telefones` varchar(250) NOT NULL,
  `funcionamento` varchar(250) NOT NULL,
  `whatsapp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos_final`
--

INSERT INTO `contatos_final` (`id`, `local`, `emails`, `telefones`, `funcionamento`, `whatsapp`) VALUES
(1, 'Rua Jorge Caixe, 170 – Jardim Nomura – Cotia – SP (próximo à Pró Cotia)', 'edsonplotagem2017@gmail.com  edsonplotagem@gmail.com', '(11) 4551-3082  (11) 91434-4524', 'De Segunda à Sexta: 8h30 às 17h30', '11914344524');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos_topo`
--

CREATE TABLE `contatos_topo` (
  `id` int(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `telefone` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contatos_topo`
--

INSERT INTO `contatos_topo` (`id`, `email`, `telefone`, `facebook`, `instagram`, `linkedin`) VALUES
(2, 'edsonplotagem@gmail.com', '(11) 4551-3082', 'https://www.facebook.com/edsonplotagem', 'https://www.instagram.com/edsongraficarapida/', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(100) NOT NULL,
  `id_funcionario` int(100) NOT NULL,
  `tipo_emprestimo` varchar(250) NOT NULL,
  `data_emprestimo` varchar(250) NOT NULL,
  `numero_parcelamento` varchar(250) NOT NULL,
  `valor` varchar(250) NOT NULL,
  `status_emprestimo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `link_face` varchar(255) NOT NULL,
  `link_insta` varchar(255) NOT NULL,
  `foto_equipe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_na_home`
--

CREATE TABLE `estado_na_home` (
  `id` int(200) NOT NULL,
  `id_estados` int(200) NOT NULL,
  `nome_estado` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_blog_estados`
--

CREATE TABLE `fotos_blog_estados` (
  `id` int(100) NOT NULL,
  `id_blog_estados` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_classificados`
--

CREATE TABLE `fotos_classificados` (
  `id` int(100) NOT NULL,
  `id_classificados` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos_classificados`
--

INSERT INTO `fotos_classificados` (`id`, `id_classificados`, `foto`) VALUES
(1, 1, '1686960945.jpg'),
(2, 1, '1686960968.jpg'),
(3, 2, '1687313053.jpg'),
(4, 2, '1687313062.jpg'),
(5, 2, '1687313080.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_obras`
--

CREATE TABLE `fotos_obras` (
  `id` int(100) NOT NULL,
  `id_obras` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_produtos`
--

CREATE TABLE `fotos_produtos` (
  `id` int(100) NOT NULL,
  `id_produto` varchar(250) NOT NULL,
  `fotos_produto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos_produtos`
--

INSERT INTO `fotos_produtos` (`id`, `id_produto`, `fotos_produto`) VALUES
(1, '4', '1691621110.jpg'),
(2, '4', '1691621124.jpg'),
(3, '4', '1691898699.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(100) NOT NULL,
  `nome_completo` varchar(200) NOT NULL,
  `rg` int(9) NOT NULL,
  `cpf` int(11) NOT NULL,
  `data_de_nascimento` varchar(100) NOT NULL,
  `cargo` varchar(200) NOT NULL,
  `observacoes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome_completo`, `rg`, `cpf`, `data_de_nascimento`, `cargo`, `observacoes`) VALUES
(1, 'Marcio Leite', 427901613, 2147483647, '1984-06-12', 'vendedor', 'inicio como freelancer'),
(2, 'Babi Naia', 654964984, 2147483647, '1988-12-21', 'direção', 'ela é demais								'),
(3, 'funcionario 1', 231232343, 2147483647, '1984-09-22', 'Social Media', 'fdfgdfgdfgdfgdfgfd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_servicos`
--

CREATE TABLE `home_servicos` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_texto1`
--

CREATE TABLE `home_texto1` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_texto2`
--

CREATE TABLE `home_texto2` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `home_texto3`
--

CREATE TABLE `home_texto3` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(100) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `leads`
--

INSERT INTO `leads` (`id`, `id_categoria`, `nome`, `email`, `whatsapp`) VALUES
(13, 12, 'Marcio Leite', 'gmcriacaodesites@gmail.com', '11948231840'),
(14, 11, 'babis rh', 'babis@cliente.com', '11914344524'),
(15, 11, 'bone', 'boninho@legal.com', '11965784133'),
(16, 12, 'Sonia Maria', 'soninha@nois.com', '1197755-7744'),
(17, 11, 'Marcio Leite', 'marcio@marcio.com', '11914344524'),
(18, 11, 'Marcio Leite', 'marcio@marcio.com', '11965784133');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

CREATE TABLE `membro` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `profissao` varchar(300) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `visualizar` int(100) NOT NULL,
  `gravar` int(100) NOT NULL,
  `deletar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`, `visualizar`, `gravar`, `deletar`) VALUES
(1, 'Administrador', '2022-10-31 20:53:27', NULL, 1, 1, 1),
(8, 'Editor', '2022-10-31 18:30:48', '2022-11-07 20:51:39', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE `obras` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(800) NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `obras_album` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `link`, `foto`) VALUES
(1, 'tel:11948231840', '1687050138.jpg'),
(2, 'mlbn.com.br', '1687050149.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parcerias`
--

CREATE TABLE `parcerias` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parcerias`
--

INSERT INTO `parcerias` (`id`, `titulo`, `foto`, `link`) VALUES
(3, 'mlbn', '1677242098.jpg', 'http://mlbn.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(100) NOT NULL,
  `pergunta` varchar(250) NOT NULL,
  `resposta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(100) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `local` varchar(255) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `categorias_produto_id` int(11) NOT NULL,
  `situacoes_produto_id` int(11) NOT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `produto_album` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `id_destaque` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `banheiros` varchar(255) NOT NULL,
  `quartos` varchar(255) NOT NULL,
  `vaga_garagem` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `local`, `preco`, `categorias_produto_id`, `situacoes_produto_id`, `foto`, `produto_album`, `descricao`, `id_destaque`, `area`, `banheiros`, `quartos`, `vaga_garagem`, `created`, `modified`) VALUES
(4, 'Casa de Veraneio', 'Vargem Grande Paulista - SP', '230.000.00', 11, 1, '1691621087.jpg', '1691621087', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nulla neque, et pellentesque ex gravida in. Nulla vestibulum velit ante, ac consequat orci laoreet sit amet. Sed venenatis rutrum tellus, vitae malesuada nisi blandit sit amet. Fusce nec purus id lacus viverra efficitur. Mauris non nisi quis lorem mattis semper in quis neque. Pellentesque ex eros, faucibus non malesuada eget, imperdiet sit amet lorem. Aenean dapibus elit et eros rutrum, in molestie urna vestibulum. Cras sit amet leo nisl. Morbi eget eros turpis. In lacinia, arcu posuere bibendum pellentesque, erat velit pharetra metus, vitae scelerisque sapien lectus quis mauris.</p>\r\n<p>Fusce dapibus luctus dignissim. Vestibulum fringilla risus a quam lacinia, et egestas lacus vestibulum. Cras hendrerit arcu id dui egestas, et pretium leo lobortis. Cras eu tellus tellus. Sed sit amet dictum turpis. Pellentesque vitae urna ut nunc condimentum aliquam. Suspendisse potenti. Suspendisse in sapien sit amet erat vestibulum aliquet a quis nunc. Nam id tristique justo. Proin leo lacus, rutrum ut leo sit amet, semper faucibus dolor. Vivamus tincidunt tellus sed nisl dapibus auctor. Fusce vehicula ac nunc ullamcorper consectetur. In tempor eros lacinia ante sollicitudin, malesuada commodo lectus ornare. Proin a fringilla mi. Nunc et justo at velit aliquam malesuada id sed mi. Fusce semper aliquam mollis.</p>', '1', '215m2', '1', '2', '1', '2023-08-09 19:44:47', '2023-08-11 10:20:18'),
(5, 'Casa de Luxo', 'Cajamar - SP', '820.000.00', 11, 1, '1691621236.jpg', '1691621236', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nulla neque, et pellentesque ex gravida in. Nulla vestibulum velit ante, ac consequat orci laoreet sit amet. Sed venenatis rutrum tellus, vitae malesuada nisi blandit sit amet. Fusce nec purus id lacus viverra efficitur. Mauris non nisi quis lorem mattis semper in quis neque. Pellentesque ex eros, faucibus non malesuada eget, imperdiet sit amet lorem. Aenean dapibus elit et eros rutrum, in molestie urna vestibulum. Cras sit amet leo nisl. Morbi eget eros turpis. In lacinia, arcu posuere bibendum pellentesque, erat velit pharetra metus, vitae scelerisque sapien lectus quis mauris.</p>\r\n<p>Fusce dapibus luctus dignissim. Vestibulum fringilla risus a quam lacinia, et egestas lacus vestibulum. Cras hendrerit arcu id dui egestas, et pretium leo lobortis. Cras eu tellus tellus. Sed sit amet dictum turpis. Pellentesque vitae urna ut nunc condimentum aliquam. Suspendisse potenti. Suspendisse in sapien sit amet erat vestibulum aliquet a quis nunc. Nam id tristique justo. Proin leo lacus, rutrum ut leo sit amet, semper faucibus dolor. Vivamus tincidunt tellus sed nisl dapibus auctor. Fusce vehicula ac nunc ullamcorper consectetur. In tempor eros lacinia ante sollicitudin, malesuada commodo lectus ornare. Proin a fringilla mi. Nunc et justo at velit aliquam malesuada id sed mi. Fusce semper aliquam mollis.</p>', '1', '294m2', '2', '4', '3', '2023-08-09 19:47:16', '2023-08-11 10:20:24'),
(6, 'Casa Padrão', 'Cotia - SP', '290.000.00', 12, 1, '1691621325.jpg', '1691621325', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nulla neque, et pellentesque ex gravida in. Nulla vestibulum velit ante, ac consequat orci laoreet sit amet. Sed venenatis rutrum tellus, vitae malesuada nisi blandit sit amet. Fusce nec purus id lacus viverra efficitur. Mauris non nisi quis lorem mattis semper in quis neque. Pellentesque ex eros, faucibus non malesuada eget, imperdiet sit amet lorem. Aenean dapibus elit et eros rutrum, in molestie urna vestibulum. Cras sit amet leo nisl. Morbi eget eros turpis. In lacinia, arcu posuere bibendum pellentesque, erat velit pharetra metus, vitae scelerisque sapien lectus quis mauris.</p>\r\n<p>Fusce dapibus luctus dignissim. Vestibulum fringilla risus a quam lacinia, et egestas lacus vestibulum. Cras hendrerit arcu id dui egestas, et pretium leo lobortis. Cras eu tellus tellus. Sed sit amet dictum turpis. Pellentesque vitae urna ut nunc condimentum aliquam. Suspendisse potenti. Suspendisse in sapien sit amet erat vestibulum aliquet a quis nunc. Nam id tristique justo. Proin leo lacus, rutrum ut leo sit amet, semper faucibus dolor. Vivamus tincidunt tellus sed nisl dapibus auctor. Fusce vehicula ac nunc ullamcorper consectetur. In tempor eros lacinia ante sollicitudin, malesuada commodo lectus ornare. Proin a fringilla mi. Nunc et justo at velit aliquam malesuada id sed mi. Fusce semper aliquam mollis.</p>', '1', '183m2', '1', '2', '1', '2023-08-09 19:48:45', '2023-08-13 00:10:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_na_home`
--

CREATE TABLE `produtos_na_home` (
  `id` int(100) NOT NULL,
  `id_produtos` varchar(100) NOT NULL,
  `nome_categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `quem_somos`
--

INSERT INTO `quem_somos` (`id`, `titulo`, `texto`, `foto_principal`) VALUES
(1, 'Quem Somos', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque condimentum nulla neque, et pellentesque ex gravida in. Nulla vestibulum velit ante, ac consequat orci laoreet sit amet. Sed venenatis rutrum tellus, vitae malesuada nisi blandit sit amet. Fusce nec purus id lacus viverra efficitur. Mauris non nisi quis lorem mattis semper in quis neque. Pellentesque ex eros, faucibus non malesuada eget, imperdiet sit amet lorem. Aenean dapibus elit et eros rutrum, in molestie urna vestibulum. Cras sit amet leo nisl. Morbi eget eros turpis. In lacinia, arcu posuere bibendum pellentesque, erat velit pharetra metus, vitae scelerisque sapien lectus quis mauris.</p>\r\n<p>Fusce dapibus luctus dignissim. Vestibulum fringilla risus a quam lacinia, et egestas lacus vestibulum. Cras hendrerit arcu id dui egestas, et pretium leo lobortis. Cras eu tellus tellus. Sed sit amet dictum turpis. Pellentesque vitae urna ut nunc condimentum aliquam. Suspendisse potenti. Suspendisse in sapien sit amet erat vestibulum aliquet a quis nunc. Nam id tristique justo. Proin leo lacus, rutrum ut leo sit amet, semper faucibus dolor. Vivamus tincidunt tellus sed nisl dapibus auctor. Fusce vehicula ac nunc ullamcorper consectetur. In tempor eros lacinia ante sollicitudin, malesuada commodo lectus ornare. Proin a fringilla mi. Nunc et justo at velit aliquam malesuada id sed mi. Fusce semper aliquam mollis.</p>\r\n<p>Nullam dignissim, arcu vitae facilisis tempor, augue massa imperdiet diam, eget fringilla justo nibh eget tortor. Nullam gravida mi ac nibh maximus, nec dictum felis lacinia. Nullam non mauris purus. Praesent maximus interdum lorem, non eleifend urna. Nam eu ligula sit amet turpis consequat venenatis ut ut nibh. Aenean at diam quis purus ullamcorper volutpat semper ultrices tortor. Aliquam eleifend purus pharetra mauris semper, et lacinia massa pellentesque. Sed non ante elementum, condimentum sem vel, vulputate sapien. Cras ac rhoncus ante. Donec vitae aliquet felis, at ultrices nisl. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam rhoncus dolor odio, quis lobortis felis accumsan eget. Fusce ullamcorper felis ac enim ullamcorper, at vehicula tortor fringilla. In elementum orci at neque pellentesque sagittis. Nam pharetra nisi libero, eu tristique eros porta eu. Curabitur volutpat augue tempor sapien bibendum, et tempor nulla porta.</p>', '1691621549.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_geral`
--

CREATE TABLE `servico_geral` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico_geral`
--

INSERT INTO `servico_geral` (`id`, `titulo`, `texto`, `foto_principal`) VALUES
(1, 'Serviços', '<p class=\"fst-italic\">Aqui na Edson Gr&aacute;fica R&aacute;pida todos os servi&ccedil;os s&atilde;o recepcionados pela &aacute;rea de atendimento, que est&aacute; disposta a lhe dar a m&aacute;xima aten&ccedil;&atilde;o, esclarecer suas d&uacute;vidas e indicar a melhor solu&ccedil;&atilde;o para a produ&ccedil;&atilde;o de seus impressos.</p>\r\n<p>Nossos servi&ccedil;os primam pela qualidade, com equipamentos de ponta e profissionais competentes e treinados para atender &agrave;s suas necessidades. Os acabamentos de seus produtos podem ser manuais ou autom&aacute;ticos, nossos profissionais d&atilde;o os toques finais no seu projeto. Dobras, cortes e vincos, plastifica&ccedil;&atilde;o e encaderna&ccedil;&atilde;o s&atilde;o apenas alguns dos recursos que podemos oferecer.</p>\r\n<p>Todos os servi&ccedil;os e arquivos enviados para nossa loja, via internet ou pessoalmente, s&atilde;o manuseados com seguran&ccedil;a e sigilo. Nossos equipamentos s&atilde;o protegidos por programas anti-v&iacute;rus e firewall, impedindo a contamina&ccedil;&atilde;o de arquivos e perif&eacute;ricos.</p>\r\n<p>&nbsp;</p>\r\n<p>Seja um CLIENTE VIP e receba seus produtos no local que necessitar. Nosso servi&ccedil;o de entrega pode ser contratado por demanda ou pr&eacute;-estabelecido no seu cadastro de mensalista. Aproveite mais esta facilidade que a Edson Gr&aacute;fica R&aacute;pida oferece para voc&ecirc;.</p>', '1677241664.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_lista`
--

CREATE TABLE `servico_lista` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico_lista`
--

INSERT INTO `servico_lista` (`id`, `titulo`, `texto`, `foto_principal`) VALUES
(1, '1. Plotagens – PB e Colorida', '<p><img src=\"https://www.edsonplotagem.com.br/site/wp-content/uploads/2015/08/plotagem-colorida2-380x380.jpg\" alt=\"Plotagens &ndash; PB e Colorida\"></p>\r\n<p>Plotagem &eacute; a impress&atilde;o de projetos em tamanhos superiores, realizada atrav&eacute;s de equipamentos de extrema precis&atilde;o denominados plotter, que possibilita a impress&atilde;o de trabalhos em grandes formatos como plantas e projetos para arquitetura, engenharia civil e mec&acirc;nica, entre outros.<br>A plotagem pode ser executada em diversos tamanhos e materiais, sendo colorida ou PB.<br>Al&eacute;m de execu&ccedil;&otilde;es para trabalhos da &aacute;rea de arquitetura, a plotter tamb&eacute;m permite impress&otilde;es personalizadas em grandes formatos para divulga&ccedil;&atilde;o de seus produtos e servi&ccedil;os, e tamb&eacute;m para materiais de eventos e treinamentos, pois o material permite preenchimento e personaliza&ccedil;&atilde;o com qualquer tipo de material de escrita. Ex.: jogos para treinamentos, fingers tree para casamentos, e muito mais.</p>', '1677242980.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes`
--

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacoes`
--

INSERT INTO `situacoes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-25 00:00:00', NULL),
(2, 'Inativo', '2016-03-25 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes_produtos`
--

CREATE TABLE `situacoes_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacoes_produtos`
--

INSERT INTO `situacoes_produtos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-28 00:00:00', NULL),
(2, 'Inativo', '2016-03-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `status_emprestimos`
--

CREATE TABLE `status_emprestimos` (
  `id` int(100) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `status_emprestimos`
--

INSERT INTO `status_emprestimos` (`id`, `status`) VALUES
(1, 'Ativo'),
(2, 'Aguardando Pag'),
(3, 'Negociano'),
(4, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(100) NOT NULL,
  `nome_tarefa` varchar(250) NOT NULL,
  `descricao_tarefa` varchar(255) NOT NULL,
  `data_criada` varchar(250) NOT NULL,
  `status_tarefa` varchar(250) NOT NULL,
  `id_cliente` int(100) NOT NULL,
  `id_advogado` int(100) NOT NULL,
  `valor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome_tarefa`, `descricao_tarefa`, `data_criada`, `status_tarefa`, `id_cliente`, `id_advogado`, `valor`) VALUES
(8, 'Plotagem Planta Baixa', 'jhvjhvjhvbjhvbjhbjhb', '09/02/2023', 'Aguardando', 15, 6, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(240) NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-03-25 02:02:02', '2016-03-27 19:22:38'),
(7, 'Editor', 'editor@admin.com', '202cb962ac59075b964b07152d234b70', 1, 8, '2022-10-31 19:50:51', '2022-11-07 13:00:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `senha_real` varchar(200) NOT NULL,
  `whatsapp` varchar(100) NOT NULL,
  `situacoe_id` int(100) NOT NULL,
  `niveis_acesso_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`, `email`, `senha`, `senha_real`, `whatsapp`, `situacoe_id`, `niveis_acesso_id`) VALUES
(6, 'Edson Grafica', 'edson@grafica.com', 'f09696910bdd874a99cd74c8f05b5c44', '1313', 'xxxxxxxxxxx', 1, 9);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `apos_banner`
--
ALTER TABLE `apos_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente_vip`
--
ALTER TABLE `cliente_vip`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos_final`
--
ALTER TABLE `contatos_final`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos_topo`
--
ALTER TABLE `contatos_topo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado_na_home`
--
ALTER TABLE `estado_na_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_produtos`
--
ALTER TABLE `fotos_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `parcerias`
--
ALTER TABLE `parcerias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico_geral`
--
ALTER TABLE `servico_geral`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico_lista`
--
ALTER TABLE `servico_lista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacoes`
--
ALTER TABLE `situacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacoes_produtos`
--
ALTER TABLE `situacoes_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `status_emprestimos`
--
ALTER TABLE `status_emprestimos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `apos_banner`
--
ALTER TABLE `apos_banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `cliente_vip`
--
ALTER TABLE `cliente_vip`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contatos_final`
--
ALTER TABLE `contatos_final`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `contatos_topo`
--
ALTER TABLE `contatos_topo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `estado_na_home`
--
ALTER TABLE `estado_na_home`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fotos_produtos`
--
ALTER TABLE `fotos_produtos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `parcerias`
--
ALTER TABLE `parcerias`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servico_geral`
--
ALTER TABLE `servico_geral`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servico_lista`
--
ALTER TABLE `servico_lista`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `situacoes`
--
ALTER TABLE `situacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `situacoes_produtos`
--
ALTER TABLE `situacoes_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `status_emprestimos`
--
ALTER TABLE `status_emprestimos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
