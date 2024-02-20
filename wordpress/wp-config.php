<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'esercizio_settima_11' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`3-?p_zzIVW*X^LPZf[|7^l]pOfW{(4[nc?~U(,kVXx[aS32d$jL>b{!w}e$<bYO' );
define( 'SECURE_AUTH_KEY',  ';ajZ+P`YQtsf${-oL{g&xFrp1cP}jD1>Z^=u`_5n^soP g6-x9XL:wxwsBl3S1l(' );
define( 'LOGGED_IN_KEY',    'tN[1re#(,~TgI&rwUb`-u{-920S.^kAjmpi+*8r(^3*U&d#XLXRA[I)];m/s a6|' );
define( 'NONCE_KEY',        'r6,ih7BTRZfZlX<!aYQ-9(HqV;(U6!vXX[n5ZP_PM~.XBEA^.JR=Mi3!%*|Y8)Ek' );
define( 'AUTH_SALT',        '@w8 d neqxXbD RCIaCDeCWs^ &mtj9T,@{/q_z_{H#mY.)(1#.Xq2BhO3D;73q|' );
define( 'SECURE_AUTH_SALT', 'T{n9j|T[n/I2%>/p]Kr{OSQ_Pu,1-:^IhI/(B,Xj?XuD^DNUV@HbdN<pttb*I%G1' );
define( 'LOGGED_IN_SALT',   '>puVphB#f36AcT34KyO(eN+]`1[,b1<D0fm1iXfI&P}=Uc)1*yX_5h]e?A@I<jwl' );
define( 'NONCE_SALT',       '-D#r(9 <|32yX%m~9?]x^oT90+8|S(Ps@P 6M~vidK0Ot(D00kuMHRp32q=X;o]P' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
