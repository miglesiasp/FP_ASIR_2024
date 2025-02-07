# Redirigir tráfico entrante en el puerto 80 (HTTP) al servidor interno
iptables -t nat -A PREROUTING -p tcp --dport 80 -j DNAT --to-destination 192.168.56.100:80

# Redirigir tráfico entrante en el puerto 443 (HTTPS) al servidor interno
iptables -t nat -A PREROUTING -p tcp --dport 443 -j DNAT --to-destination 192.168.56.100:443

# Permitir tráfico entrante en el puerto 80 (HTTP)
iptables -A FORWARD -p tcp --dport 80 -d 192.168.56.100 -j ACCEPT

# Permitir tráfico entrante en el puerto 443 (HTTPS)
iptables -A FORWARD -p tcp --dport 443 -d 192.168.56.100 -j ACCEPT

# Denegar todo el tráfico entrante que no sea por los puertos 80 o 443
iptables -A FORWARD -d 192.168.56.100 -j DROP
#Reiniciamos reglas y politicas por defecto.
sudo iptables -F		#  Elimina todas las reglas activas en el firewall de la tabla de filtro
sudo iptables -X		#  Elimina reglas personalizadas	 
sudo iptables -Z		#  Resetea los contadores
sudo iptables -t nat -F		#  Elimina las reglas activas en la tabla nat
sudo iptables -t nat -X		
sudo iptables -t mangle -F	#  Elimina reglas activas en la tabla mangle
sudo iptables -t mangle -X

# Habilitamos la politica por defecto a accept para poder lanzarlo en remoto
sudo iptables -P INPUT ACCEPT
sudo iptables -P OUTPUT ACCEPT
sudo iptables -P FORWARD ACCEPT


# Permitir tráfico loopback	Opcional: Para permitir comprobaciones desde la propia maquina fw
sudo iptables -A INPUT -i lo -j ACCEPT
sudo iptables -A OUTPUT -o lo -j ACCEPT

#DNAT
# Redirigir tráfico entrante en el puerto 80 (HTTP) al servidor interno
iptables -t nat -A PREROUTING -p tcp --dport 80 -j DNAT --to-destination 192.168.56.100:80

# Redirigir tráfico entrante en el puerto 443 (HTTPS) al servidor interno
iptables -t nat -A PREROUTING -p tcp --dport 443 -j DNAT --to-destination 192.168.56.100:443

# Permitimos conexiones al puerto 22 desde el origen indicado
sudo iptables -A INPUT -p tcp --dport 22 -s 192.168.18.0/24 -j ACCEPT
sudo iptables -A OUTPUT -p tcp --sport 22 -s 192.168.18.0/24 -j ACCEPT
sudo iptables -A FORWARD -p tcp --dport 22 -s 192.168.18.0/24 -j ACCEPT
sudo iptables -A FORWARD -p tcp --sport 22 -s 192.168.18.0/24 -j ACCEPT
sudo iptables -A FORWARD -m state --state ESTABLISHED,RELATED -j ACCEPT

# Permitir tráfico entrante en el puerto 80 (HTTP)
iptables -A FORWARD -p tcp --dport 80 -d 192.168.56.100 -j ACCEPT

# Permitir tráfico entrante en el puerto 443 (HTTPS)
iptables -A FORWARD -p tcp --dport 443 -d 192.168.56.100 -j ACCEPT

# Habilitamos la politica por defecto definitivamente a DROP
sudo iptables -P INPUT DROP
sudo iptables -P OUTPUT DROP
sudo iptables -P FORWARD DROP
