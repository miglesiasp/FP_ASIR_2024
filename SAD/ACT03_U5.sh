# Habilitar NAT (SNAT)
iptables -t nat -A POSTROUTING -o eth0 -j MASQUERADE

# Denegar todo el tráfico
iptables -P INPUT DROP
iptables -P FORWARD DROP

# Permitir tráfico en los puertos 80 y 443
iptables -A INPUT -p tcp --dport 80 -j ACCEPT
iptables -A INPUT -p tcp --dport 443 -j ACCEPT

# Permitir tráfico relacionado y establecido
iptables -A INPUT -m state --state RELATED,ESTABLISHED -j ACCEPT

# Redirigir tráfico hacia Internet desde el puerto 80
iptables -t nat -A POSTROUTING -p tcp --sport 80 -j SNAT --to-destination 190.23.3.10:80

# Redirigir tráfico hacia Internet desde el pueto 443
iptables -t nat -A POSTROUTING -p tcp --sport 443 -j SNAT --to-destination 190.23.3.10:443


# Permitir tráfico entrante en el puerto 80 (HTTP)
iptables -A FORWARD -p tcp --dport 80 -d 192.168.56.100 -j ACCEPT

# Permitir tráfico entrante en el puerto 443 (HTTPS)
iptables -A FORWARD -p tcp --dport 443 -d 192.168.56.100 -j ACCEPT


# Permitir tráfico en la red interna
iptables -A INPUT -i eth1 -j ACCEPT