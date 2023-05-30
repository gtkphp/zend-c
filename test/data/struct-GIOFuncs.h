
struct _GIOFuncs
{
  GIOStatus (*io_read)           (GIOChannel   *channel,
			          gchar        *buf,
				  gsize         count,
				  gsize        *bytes_read,
				  GError      **err);
  /*GIOStatus (*io_write)          (GIOChannel   *channel,
				  const gchar  *buf,
				  gsize         count,
				  gsize        *bytes_written,
				  GError      **err);
  GIOStatus (*io_seek)           (GIOChannel   *channel,
				  gint64        offset,
				  GSeekType     type,
				  GError      **err);
  GIOStatus  (*io_close)         (GIOChannel   *channel,
				  GError      **err);
  GSource*   (*io_create_watch)  (GIOChannel   *channel,
				  GIOCondition  condition);
  void       (*io_free)          (GIOChannel   *channel);
  GIOStatus  (*io_set_flags)     (GIOChannel   *channel,
                                  GIOFlags      flags,
				  GError      **err);
  GIOFlags   (*io_get_flags)     (GIOChannel   *channel);*/
};
