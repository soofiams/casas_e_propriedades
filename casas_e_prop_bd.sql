-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Set-2025 às 19:32
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `casas_e_prop_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `backoffice`
--

CREATE TABLE `backoffice` (
  `id` int(11) NOT NULL,
  `nome` varchar(110) NOT NULL,
  `login` varchar(110) NOT NULL,
  `senha` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `backoffice`
--

INSERT INTO `backoffice` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'Administrador ', 'admin', 'codemaster');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrossel_header`
--

CREATE TABLE `carrossel_header` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` text NOT NULL,
  `texto` varchar(100) NOT NULL,
  `posicao` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `imagens` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carrossel_header`
--

INSERT INTO `carrossel_header` (`id`, `titulo`, `subtitulo`, `texto`, `posicao`, `ativo`, `imagens`) VALUES
(1, 'Casas & Propriedades', '', 'Experiência - Profissionalismo', 1, 1, 'http://localhost/casas_e_propriedades/imagens%20-%20c%C3%B3pia/cabecalho1.jpg'),
(2, 'Casas & Propriedades', '', 'Sustentabilidade - Qualidade de vida', 2, 1, 'http://localhost/casas_e_propriedades/imagens%20-%20c%C3%B3pia/cabecalho2.jpg'),
(3, 'Casas & Propriedades', '', 'Experiência - Qualidade de construção', 3, 1, 'http://localhost/casas_e_propriedades/imagens%20-%20c%C3%B3pia/cabecalho3.jpg'),
(4, 'Casas & Propriedades', '', 'Engenharia - Arquitetura', 4, 1, 'http://localhost/casas_e_propriedades/imagens%20-%20c%C3%B3pia/cabecalho4.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `morada` varchar(1100) NOT NULL,
  `email` varchar(1100) NOT NULL,
  `telefone` varchar(110) NOT NULL,
  `facebook` varchar(1100) NOT NULL,
  `email_interno` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `morada`, `email`, `telefone`, `facebook`, `email_interno`) VALUES
(1, 'Rua Lorem Ipsum, nº 123, 1DTO, Almada, Portugal', 'geral@casasepropriedades.pt\r\n', '(+351) 300 555 666', 'https://www.facebook.com', 'levigi8642@obirah.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `posicao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `titulo`, `texto`, `ativo`, `posicao`) VALUES
(1, 'Historial', '  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus accusantium distinctio ea tempore\r\n                        explicabo aut dignissimos, iste delectus nam nemo recusandae dicta fugiat quas eos inventore\r\n                        dolorem ut esse quia quae reiciendis. Dolore provident aliquam eum, nostrum doloremque hic harum\r\n                        sed culpa reiciendis adipisci exercitationem temporibus aperiam fuga odit cupiditate a placeat,\r\n                        architecto at animi blanditiis quibusdam tempore. Magni dicta eius ipsum molestias quasi id\r\n                        repellat, ratione rerum! Quasi, ullam dolorum quaerat, quo labore quisquam corporis, modi illo\r\n                        quam voluptatum sequi adipisci nihil? Dolorum voluptatum, molestias aliquam quidem sequi, nisi\r\n                        quibusdam odio, officiis expedita blanditiis earum eius tempore totam? Assumenda iure et esse\r\n                        animi, ea tenetur porro est laudantium quae similique, a quasi dolorem soluta, aut excepturi.\r\n                        Laudantium libero deleniti accusamus autem illo saepe est, eius, quos eveniet odit suscipit,\r\n                        sint nostrum aspernatur. Aut minus quisquam voluptatibus dolorum est nihil alias velit quam\r\n                        consectetur hic sint, sequi eos soluta blanditiis.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus accusantium distinctio ea tempore explicabo aut dignissimos, iste delectus nam nemo recusandae dicta fugiat quas eos inventore dolorem ut esse quia quae reiciendis. Dolore provident aliquam eum, nostrum doloremque hic harum sed culpa reiciendis adipisci exercitationem temporibus aperiam fuga odit cupiditate a placeat, architecto at animi blanditiis quibusdam tempore. Magni dicta eius ipsum molestias quasi id repellat, ratione rerum! Quasi, ullam dolorum quaerat, quo labore quisquam corporis, modi illo quam voluptatum sequi adipisci nihil? Dolorum voluptatum, molestias aliquam quidem sequi, nisi quibusdam odio, officiis expedita blanditiis earum eius tempore totam? Assumenda iure et esse animi, ea tenetur porro est laudantium quae similique, a quasi dolorem soluta, aut excepturi. Laudantium libero deleniti accusamus autem illo saepe est, eius, quos eveniet odit suscipit, sint nostrum aspernatur. Aut minus quisquam voluptatibus dolorum est nihil alias velit quam consectetur hic sint, sequi eos soluta blanditiis.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus accusantium distinctio ea tempore explicabo aut dignissimos, iste delectus nam nemo recusandae dicta fugiat quas eos inventore dolorem ut esse quia quae reiciendis. Dolore provident aliquam eum, nostrum doloremque hic harum sed culpa reiciendis adipisci exercitationem temporibus aperiam fuga odit cupiditate a placeat, architecto at animi blanditiis quibusdam tempore. Magni dicta eius ipsum molestias quasi id repellat, ratione rerum! Quasi, ullam dolorum quaerat, quo labore quisquam corporis, modi illo quam voluptatum sequi adipisci nihil? Dolorum voluptatum, molestias aliquam quidem sequi, nisi quibusdam odio, officiis expedita blanditiis earum eius tempore totam? Assumenda iure et esse animi, ea tenetur porro est laudantium quae similique, a quasi dolorem soluta, aut excepturi. Laudantium libero deleniti accusamus autem illo saepe est, eius, quos eveniet odit suscipit, sint nostrum aspernatur. Aut minus quisquam voluptatibus dolorum est nihil alias velit quam consectetur hic sint, sequi eos soluta blanditiis.</p>\r\n  ', 0, 0),
(2, 'Filosofia e Valores', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus accusantium distinctio ea tempore\r\n                        explicabo aut dignissimos, iste delectus nam nemo recusandae dicta fugiat quas eos inventore\r\n                        dolorem ut esse quia quae reiciendis. Dolore provident aliquam eum, nostrum doloremque hic harum\r\n                        sed culpa reiciendis adipisci exercitationem temporibus aperiam fuga odit cupiditate a placeat,\r\n                        architecto at animi blanditiis quibusdam tempore. Magni dicta eius ipsum molestias quasi id\r\n                        repellat, ratione rerum! Quasi, ullam dolorum quaerat, quo labore quisquam corporis, modi illo\r\n                        quam voluptatum sequi adipisci nihil? Dolorum voluptatum, molestias aliquam quidem sequi, nisi\r\n                        quibusdam odio, officiis expedita blanditiis earum eius tempore totam? Assumenda iure et esse\r\n                        animi, ea tenetur porro est laudantium quae similique, a quasi dolorem soluta, aut excepturi.\r\n                        Laudantium libero deleniti accusamus autem illo saepe est, eius, quos eveniet odit suscipit,\r\n                        sint nostrum aspernatur. Aut minus quisquam voluptatibus dolorum est nihil alias velit quam\r\n                        consectetur hic sint, sequi eos soluta blanditiis.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus accusantium distinctio ea tempore\r\n                        explicabo aut dignissimos, iste delectus nam nemo recusandae dicta fugiat quas eos inventore\r\n                        dolorem ut esse quia quae reiciendis. Dolore provident aliquam eum, nostrum doloremque hic harum\r\n                        sed culpa reiciendis adipisci exercitationem temporibus aperiam fuga odit cupiditate a placeat,\r\n                        architecto at animi blanditiis quibusdam tempore. Magni dicta eius ipsum molestias quasi id\r\n                        repellat, ratione rerum! Quasi, ullam dolorum quaerat, quo labore quisquam corporis, modi illo\r\n                        quam voluptatum sequi adipisci nihil? Dolorum voluptatum, molestias aliquam quidem sequi, nisi\r\n                        quibusdam odio, officiis expedita blanditiis earum eius tempore totam? Assumenda iure et esse\r\n                        animi, ea tenetur porro est laudantium quae similique, a quasi dolorem soluta, aut excepturi.\r\n                        Laudantium libero deleniti accusamus autem illo saepe est, eius, quos eveniet odit suscipit,\r\n                        sint nostrum aspernatur. Aut minus quisquam voluptatibus dolorum est nihil alias velit quam\r\n                        consectetur hic sint, sequi eos soluta blanditiis.</p>\r\n', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Extras`
--

CREATE TABLE `Extras` (
  `id` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `Extras`
--

INSERT INTO `Extras` (`id`, `titulo`, `texto`) VALUES
(1, 'Ralc', ' <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <br>'),
(2, 'Política de Cookies', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ut iusto ad. Obcaecati hic odio aliquam porro sapiente. Perferendis reprehenderit quisquam deleniti sed, similique, libero modi culpa vel vero, expedita consequuntur quae impedit eius recusandae minus provident dolor. Enim doloribus, exercitationem harum tenetur eos, praesentium ipsa assumenda autem atque id repellendus cupiditate mollitia nisi dicta impedit iusto illo, sequi tempore aperiam nostrum eligendi neque odit minus laudantium! Enim ipsa accusamus nulla repellendus recusandae, temporibus neque at hic ab quasi dicta perferendis, labore laborum! Ad eum quo quis corrupti maxime reprehenderit molestiae, repellat, repellendus accusamus cupiditate fugiat explicabo possimus ullam ab?</p>\r\n        <br>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `tipologia` varchar(500) NOT NULL,
  `id_projeto` int(11) NOT NULL,
  `posicao` int(11) NOT NULL,
  `imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `mostrar`, `nome`, `tipologia`, `id_projeto`, `posicao`, `imagem`) VALUES
(1, 1, 'Terraços- Almada ', 'T1', 1, 1, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30342e6a7067225d),
(2, 0, 'Terraços - Almada ', 'Exteriores', 1, 2, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f31312e6a7067222c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30382e6a7067222c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30392e6a7067222c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f31302e6a7067225d),
(3, 1, 'Terraços Almada', 'T2', 1, 3, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31332e6a7067225d),
(4, 0, 'Terraços Almada', 'T3', 1, 4, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32362e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32352e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32302e6a7067225d),
(5, 1, 'Jardim- Braga ', 'T1', 2, 5, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74312f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74312f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74312f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74312f30342e6a7067225d),
(6, 1, 'Jardim - Braga', 'Exteriores', 2, 6, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30342e6a7067225d),
(7, 0, 'Jardim- Braga ', 'T2', 2, 7, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30362e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30372e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30382e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30392e6a7067225d);

-- --------------------------------------------------------

--
-- Estrutura da tabela `portefolio`
--

CREATE TABLE `portefolio` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `localidade` varchar(100) NOT NULL,
  `posicao` int(11) NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  `imagens` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `portefolio`
--

INSERT INTO `portefolio` (`id`, `nome`, `localidade`, `posicao`, `mostrar`, `imagens`) VALUES
(1, 'Varandas Lorem', '-Almada', 1, 0, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30322e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30332e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30342e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30352e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30362e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30372e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30382e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f30392e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f31302e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f31312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30322f31322e6a7067225d0a0a),
(2, 'Vila Ipsum ', '- Sesimbra ', 2, 0, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30322e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30332e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30342e6a706722202c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30312e6a7067222c22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30322e6a7067225d),
(3, 'Campo Dolor', '- Braga ', 3, 0, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30322e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30332e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30342e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30352e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30362e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30372e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30382e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f30392e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f31302e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74302f31312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30332e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30342e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30352e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30362e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30372e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30382e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f30392e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31302e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31312e6a7067225d),
(4, 'Estrada Sit', '-Lisboa', 5, 0, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74302f30312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74302f30322e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74302f30332e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74302f30342e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30322e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30332e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30332f74322f30342e6a7067225d),
(5, 'Rua Amet', '- Porto', 4, 0, 0x5b22687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30352e6a7067222c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74312f30362e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31342e6a7067222c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31352e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31362e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31372e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31382e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f31392e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32302e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32312e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32322e6a706722202c2022687474703a2f2f6c6f63616c686f73742f63617361735f655f70726f7072696564616465732f696d6167656e732532302d253230632543332542337069612f70726f6a6563746f5f67656e657269636f5f30312f74322f32332e6a7067225d);

-- --------------------------------------------------------

--
-- Estrutura da tabela `projetos_comercializacao`
--

CREATE TABLE `projetos_comercializacao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `subtitulo` varchar(200) NOT NULL,
  `conteudo` varchar(200) NOT NULL,
  `posicao` int(11) NOT NULL,
  `mostrar` tinyint(1) NOT NULL,
  `Acabamentos` text NOT NULL,
  `plantas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `projetos_comercializacao`
--

INSERT INTO `projetos_comercializacao` (`id`, `nome`, `subtitulo`, `conteudo`, `posicao`, `mostrar`, `Acabamentos`, `plantas`) VALUES
(1, 'Terraços - Almada', '', '', 1, 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n\r\n       ', '    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut perferendis animi a enim assumenda explicabo at quibusdam sit minima, modi cum? Id ea rerum itaque dicta reiciendis harum voluptatem eius animi explicabo ad quo nesciunt ab architecto laudantium vero dolorem laboriosam illo, iure sed error non facere accusantium veritatis. Minus omnis, error ipsum quas beatae consequatur nihil reprehenderit? Officiis voluptas repellat beatae voluptates eum deserunt iste ipsum facere voluptatem magni quidem et molestias, tenetur, dolorum necessitatibus impedit, cumque laborum exercitationem.</p>\r\n\r\n <div class=\"row\">\r\n            <div class=\"col-12\">\r\n              <table class=\"tabela-precos\">\r\n                <thead>\r\n                  <tr>\r\n                    <th>TIPOLOGIA</th>\r\n                    <th>ÁREA</th>\r\n                    <th>ESTADO</th>\r\n                    <th>VALOR</th>\r\n                  </tr>\r\n                </thead>\r\n                <tbody>\r\n                  <tr>\r\n                    <td>T1</td>\r\n                    <td>82 m<sup>2</sup></td>\r\n                    <td> Em construção</td>\r\n                    <td>150.000,00 €</td>\r\n                  </tr>\r\n                  <tr>\r\n                    <td>T2</td>\r\n                    <td>101 m<sup>2</sup></td>\r\n                    <td>Finalizado</td>\r\n                    <td>280.000,00 €</td>\r\n                  </tr>\r\n                  <tr>\r\n                    <td>T3</td>\r\n                    <td>140 m<sup>2</sup></td>\r\n                    <td>Em construção</td>\r\n                    <td>402.000,00 €</td>\r\n                  </tr>\r\n                </tbody>\r\n              </table>\r\n            </div>\r\n          </div>'),
(2, 'Jardim - Braga', '', '', 2, 1, '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n        <br>\r\n<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur odit magnam dicta, ipsum corrupti, aut ratione, facilis ipsam reiciendis dolores dolore iste repellat nihil ullam. Fugit, quae. Numquam quae excepturi facere, vel corrupti, maiores quam facilis culpa soluta aliquid repellat asperiores impedit reiciendis. Repudiandae illo recusandae odio, qui ipsam odit sint dignissimos tempora totam nostrum ipsa inventore voluptate temporibus dolores quae quos culpa. Itaque, consequatur! Hic dolore eius autem earum aspernatur, deserunt itaque tempore ipsum maiores reprehenderit odio expedita quia laboriosam fugit quaerat sit obcaecati quis explicabo illum maxime labore nesciunt! Nam eaque debitis sed rem blanditiis est sit esse.</p>\r\n        <br>', '    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut perferendis animi a enim assumenda explicabo at quibusdam sit minima, modi cum? Id ea rerum itaque dicta reiciendis harum voluptatem eius animi explicabo ad quo nesciunt ab architecto laudantium vero dolorem laboriosam illo, iure sed error non facere accusantium veritatis. Minus omnis, error ipsum quas beatae consequatur nihil reprehenderit? Officiis voluptas repellat beatae voluptates eum deserunt iste ipsum facere voluptatem magni quidem et molestias, tenetur, dolorum necessitatibus impedit, cumque laborum exercitationem.</p>\r\n\r\n <div class=\"row\">\r\n            <div class=\"col-12\">\r\n              <table class=\"tabela-precos\">\r\n                <thead>\r\n                  <tr>\r\n                    <th>TIPOLOGIA</th>\r\n                    <th>ÁREA</th>\r\n                    <th>ESTADO</th>\r\n                    <th>VALOR</th>\r\n                  </tr>\r\n                </thead>\r\n                <tbody>\r\n                  <tr>\r\n                    <td>T1</td>\r\n                    <td>82 m<sup>2</sup></td>\r\n                    <td> Em construção</td>\r\n                    <td>150.000,00 €</td>\r\n                  </tr>\r\n                  <tr>\r\n                    <td>T2</td>\r\n                    <td>101 m<sup>2</sup></td>\r\n                    <td>Finalizado</td>\r\n                    <td>280.000,00 €</td>\r\n                  </tr>\r\n                  <tr>\r\n                    <td>T3</td>\r\n                    <td>140 m<sup>2</sup></td>\r\n                    <td>Em construção</td>\r\n                    <td>402.000,00 €</td>\r\n                  </tr>\r\n                </tbody>\r\n              </table>\r\n            </div>\r\n          </div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `backoffice`
--
ALTER TABLE `backoffice`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrossel_header`
--
ALTER TABLE `carrossel_header`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `Extras`
--
ALTER TABLE `Extras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `portefolio`
--
ALTER TABLE `portefolio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `projetos_comercializacao`
--
ALTER TABLE `projetos_comercializacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `backoffice`
--
ALTER TABLE `backoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carrossel_header`
--
ALTER TABLE `carrossel_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `Extras`
--
ALTER TABLE `Extras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `portefolio`
--
ALTER TABLE `portefolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `projetos_comercializacao`
--
ALTER TABLE `projetos_comercializacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
